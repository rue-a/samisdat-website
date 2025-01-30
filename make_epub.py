# %%
import os
import re
from ebooklib import epub
from bs4 import BeautifulSoup


def clean_html(file_path):
    """
    Load an HTML file, remove the div with id='bluepage', and return cleaned content.
    """
    with open(file_path, "r", encoding="utf-8") as file:
        soup = BeautifulSoup(file, "html.parser")

        # Find and remove the div with id="bluepage"
        bluepage_div = soup.find("div", id="bluepage_nav")
        if bluepage_div:
            bluepage_div.decompose()  # Remove the div entirely

        # Return cleaned content
        return str(soup)


def parse_html_title(file_path):
    """Extract the title from the HTML file."""
    with open(file_path, "r", encoding="utf-8") as file:
        soup = BeautifulSoup(file, "html.parser")
        return soup.title.string if soup.title else "Untitled"


def group_files_by_hierarchy(files):
    """Group files into a hierarchical structure based on the whl ID."""
    hierarchy = {}
    for file in files:
        match = re.search(r"whl=(\d+)", file)
        if match:
            whl_id = match.group(1)
            if whl_id.startswith("12"):  # Filter for relevant IDs
                level = len(whl_id.rstrip("0")) // 2  # Calculate the level
                parent_id = whl_id[: 2 * (level - 1)] + "0" * (8 - 2 * (level - 1))
                if parent_id not in hierarchy:
                    hierarchy[parent_id] = []
                hierarchy[parent_id].append((whl_id, file))
    return hierarchy


def build_hierarchy_tree(root_id, hierarchy):
    """Recursively build the hierarchy tree for chapters."""
    children = sorted(hierarchy.get(root_id, []))
    tree = []
    for whl_id, file in children:
        subtree = build_hierarchy_tree(whl_id, hierarchy)
        tree.append({"id": whl_id, "file": file, "children": subtree})
    return tree


def create_epub_from_hierarchy(root_title, author, hierarchy_tree, output_filename):
    """Create an EPUB with chapters and subchapters based on the hierarchy."""
    book = epub.EpubBook()
    book.set_title(root_title)
    book.set_language("de")
    book.add_author(author)

    all_chapters = []

    def add_chapters(tree):
        chapters = []
        for node in tree:
            file = node["file"]
            title = parse_html_title(file)
            content = clean_html(file)  # Clean content to exclude unwanted div

            chapter = epub.EpubHtml(
                title=title, file_name=f"{node['id']}.xhtml", lang="de"
            )
            chapter.content = content
            book.add_item(chapter)
            all_chapters.append(chapter)

            if node["children"]:
                subchapters = add_chapters(node["children"])
                chapters.append((chapter, subchapters))
            else:
                chapters.append(chapter)
        return chapters

    toc = add_chapters(hierarchy_tree)

    # Set TOC
    book.toc = toc

    # Add navigation files
    book.add_item(epub.EpubNcx())
    book.add_item(epub.EpubNav())

    # Create spine (flatten the TOC)
    def flatten_spine(toc_items):
        flat_spine = []
        for item in toc_items:
            if isinstance(item, tuple):
                flat_spine.append(item[0])
                flat_spine.extend(flatten_spine(item[1]))
            else:
                flat_spine.append(item)
        return flat_spine

    book.spine = ["nav"] + flatten_spine(toc)

    epub.write_epub(output_filename, book)


# Main Script

root_dir = "./"  # Directory containing the files
files = [os.path.join(root_dir, f) for f in os.listdir(root_dir) if f.endswith(".html")]

hierarchy = group_files_by_hierarchy(files)
root_id = "12000000"
hierarchy_tree = build_hierarchy_tree(root_id, hierarchy)

create_epub_from_hierarchy(
    root_title="DDR - SAMISDAT - BILDUNGSTHEMA",
    author="Unknown Author",
    hierarchy_tree=hierarchy_tree,
    output_filename="samisdat_with_hierarchy.epub",
)
