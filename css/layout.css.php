@font-face {
    font-family: 'Source_Sans_3';
    src: url('../fonts/Source_Sans_3/static/SourceSans3-Regular.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'Montserrat';
    src: url('../fonts/Montserrat/static/Montserrat-Regular.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'EB_Garamond';
    src: url('../fonts/EB_Garamond/static/EBGaramond-Regular.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Lustria';
    src: url('../fonts/Lustria/Lustria-Regular.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'Cormorant_Garamond';
    src: url('../fonts/Cormorant_Garamond/CormorantGaramond-Regular.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}

/* Main Colors */
:root {
    --main-color: #cc0000;
    --secondary-color1: #00afc8;
    --secondary-color2: #87cdd7;
    --secondary-color3:rgb(185, 223, 228);
    --text-color:rgb(0, 0, 0);
    --background-color: #f5f5f5;
}

body {
    background-color: var(--background-color);
    color: var(--text-color);
    font-family: Source_Sans_3, Montserrat, Arial, sans-serif;
    font-size: 18px;
    display: flex;
    margin-top:130px;
    margin-bottom: 500px;
}

hr{
    border: 1px solid var(--main-color);
}

/* Sidebar Navigation */
#bluepage_nav {
    background-color: var(--background-color);
    padding: 10px;
    width: 250px;
    height: calc(100vh - 130px); /* Adjust for fixed header and footer */
    position: fixed;
    left: 300;
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

.nav_1:hover, .nav_1b:hover, .nav2:hover, .nav3:hover {
    background-color: var(--secondary-color3);
}
.active {
    background-color: var(--secondary-color3);
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
    margin-left: 600px;
    margin-right: 600px;
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

.bluepage_bnr_txt, .bluepage_bnr_img, .bluepage_bnr_head_a, .bluepage_bnr_head_b, .bluepage_bnr_head_c {
    text-align: right;
    margin-left: 900px;
    margin-right: 600px;
    font-size: 18px;
    font-family: EB_Garamond, Lustria, Cormorant_Garamond, serif;
}




/* Footer */
#bluepage_bottom {
    background-color: var(--background-color);
    width: 100%;
    text-align: center;
    padding: 10px;
    padding-top: 30px;
    color: var(--text-color);
    position: sticky;
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

