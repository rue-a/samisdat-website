/* Main Colors */
:root {
    --main-color: #cc0000;
    --secondary-color1: #00afc8;
    --secondary-color2: #87cdd7;
    --text-color:rgb(0, 0, 0);
    --background-color: #f5f5f5;
}

body {
    background-color: var(--background-color);
    color: var(--text-color);
    font-family: Arial, sans-serif;
    display: flex;
    margin-top:130px;
    margin-bottom: 500px;
}

hr{
    border: 1px solid var(--main-color);;
}

/* Sidebar Navigation */
#bluepage_nav {
    background-color: var(--background-color);
    padding: 10px;
    width: 250px;
    height: calc(100vh - 130px); /* Adjust for fixed header and footer */
    position: fixed;
    left: 0;
    top: 130px;
    overflow-y: auto;
}

#bluepage_nav ul {
    list-style-type: none;
    padding: 0;
}

#bluepage_nav li {
    margin: 5px 0;
}

#bluepage_nav a {
    color: var(--text-color);
}


/* Hierarchical Navigation */


.nav_1 {
    margin-left: 0px;
    padding-left: 5px;
    background-color: var(--backgrund-color);
    border-left: 10px solid var(--main-color);
    display: block;
}

.nav_1b {
    margin-left: 0px;
    padding-left: 5px;
    background-color: var(--backgrund-color);
    border-left: 10px solid var(--main-color);
    display: block;
}

.nav2 {
    margin-left: 10px;
    padding-left: 5px;
    background-color: var(--backgrund-color);
    border-left: 10px solid var(--secondary-color1);
    display: block;
}

.nav3 {
    margin-left: 30px;
    padding-left: 5px;
    background-color: var(--background-color);
    border-left: 10px solid var(--secondary-color2);
    display: block;
}

.bluepage_li_1:hover .nav2 {
    display: block;
}

.bluepage_li_2:hover .nav3 {
    display: block;
}

/* Content Styling */
#bluepage_content {
    background-color: var(--backgrund-color);
    padding: 20px;
    border-radius: 10px;
    margin: 20px;
    margin-left: 270px; /* Adjust for the sidebar */
}

h1 {
    color: var(--text-color);
    border-bottom: 2px solid var(--secondary-color1);
    padding-bottom: 5px;
}

.box_txt {
    background-color: var(--background-color);
    padding: 15px;
    border-radius: 5px;
    color: #000;
}

.bluepage_bnr_txt {
    margin-left: 270px; /* Adjust for the sidebar */
}





/* Footer */
#bluepage_bottom {
    background-color: var(--background-color);
    width: 100%;
    text-align: center;
    padding: 10px;
    padding-top: 30px;
    color: var(--text-color);
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 1000;
}

#bluepage_head {
    background-color: white;
    width: 100%;
    padding: 20px;
    text-align: center;
    color: var(--text-color);
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
}



 a {
    color: var(--main-color);
    text-decoration: none;
}

a:hover {
    color: var(--secondary-color1);
}

