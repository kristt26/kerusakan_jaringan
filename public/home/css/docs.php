/*
 * Bootstrap Documentation
 * Special styles for presenting Bootstrap's documentation and code examples.
 */



/* Key scaffolding
-------------------------------------------------- */

body {
  position: relative; /* For scrollyspy */
  padding-top: 50px; /* Account for fixed navbar */
}

/* Custom docs button */
.btn-bs {
  color: #563d7c;
  background-color: #fff;
  border-color: #e5e5e5;
}
.btn-bs:hover,
.btn-bs:focus,
.btn-bs:active {
  color: #fff;
  background-color: #563d7c;
  border-color: #563d7c;
}

/* Homepage button */
.btn-outline {
  color: #fff;
  background-color: transparent;
  border-color: #cdbfe3;
}
.btn-outline:hover,
.btn-outline:focus,
.btn-outline:active {
  color: #563d7c;
  background-color: #fff;
  border-color: #fff;
}

/* Temp CSS until RC2 */
.bs-customize-placeholder {
  margin-bottom: -100px;
  padding: 80px 30px;
  text-align: center;
  background-color: #f5f5f5;
}


/* Top nav and header
-------------------------------------------------- */

.bs-docs-nav {
  background-color: #563d7c;
}
.bs-docs-nav .navbar-brand {
  color: #fff;
}
.bs-docs-nav .navbar-nav > li > a {
  color: #cdbfe3;
}
.bs-docs-nav .navbar-nav > li > a:hover {
  color: #fff;
}
.bs-docs-nav .navbar-nav > .active > a,
.bs-docs-nav .navbar-nav > .active > a:hover {
  color: #fff;
  background-color: #463265;
}
.bs-docs-nav .navbar-toggle {
  border-color: #563d7c;
}
.bs-docs-nav .navbar-toggle:hover {
  background-color: #463265;
  border-color: #463265;
}

/* Old docs callout */
.bs-old-docs {
  padding: 15px 20px;
  color: #777;
  background-color: #fafafa;
  border-bottom: 1px solid #e5e5e5;
}
.bs-old-docs strong {
  color: #555;
}
.bs-docs-home .bs-old-docs {
  padding-top: 0;
  padding-bottom: 0;
  text-align: center;
  color: inherit;
  background-color: transparent;
  border-color: transparent;
}
.bs-docs-home .bs-old-docs a {
  color: #fff;
}

/* Homepage */
.bs-docs-home {
  color: #cdbfe3;
  background-color: #563d7c;
}


/* Homepage masthead
-------------------------------------------------- */

.bs-masthead {
  position: relative;
  padding: 30px 15px;
  text-align: center;
}
.bs-masthead h1 {
  font-size: 50px;
  line-height: 1;
  color: #fff;
}

/* Download button */
.bs-masthead .btn-outline {
  margin-top: 20px;
  margin-bottom: 5px;
  padding: 18px 24px;
  font-size: 21px;
}

/* Textual links */
.bs-social {
  margin-top: 30px;
  text-align: center;
}
.bs-masthead-links {
  margin-top: 20px;
  margin-bottom: 20px;
  padding-left: 0;
  list-style: none;
  text-align: center;
}
.bs-masthead-links li {
  display: inline;
  color: #999;
}
.bs-masthead-links li + li {
  margin-left: 20px;
}
.bs-masthead-links a {
  color: #fff;
}



/* Customize and Download button
-------------------------------------------------- */

.bs-customizer .toggle {
  float: right;
}
.bs-customizer label {
  margin-top: 10px;
  font-weight: 500;
  color: #444;
}
.bs-customizer h2 {
  margin-top: 0;
  margin-bottom: 5px;
  padding-top: 30px;
}
.bs-customizer h4 {
  margin-top: 15px;
}
.bs-customizer input[type="text"] {
  background-color: #fafafa;
}
.bs-customizer .help-block {
  font-size: 12px;
}

.bs-customize-download {
  text-align: center;
}



/* Docs pages and sections
-------------------------------------------------- */

/* Page headers */
.bs-header {
  padding: 30px 30px 40px;
  font-size: 16px;
  color: #5a5a5a;
  text-align: center;
  border-bottom: 1px solid #e5e5e5;
}
.bs-header h1 {
  color: #563d7c;
}
.bs-header p {
  font-weight: 300;
  line-height: 1.5;
}
.bs-header .container {
  position: relative;
}

.bs-docs-section + .bs-docs-section {
  margin-top: 80px;
}

/* Ads in page headers */
.carbonad {
  width: auto !important;
  margin: 50px -30px -40px !important;
  padding: 20px !important;
  overflow: hidden; /* clearfix */
  height: auto !important;
  font-size: 13px !important;
  line-height: 16px !important;
  text-align: left;
  background: none !important;
  border: 0 !important;
  border-top: 1px solid #e5e5e5 !important;
}
.carbonad-img {
  margin: 0 !important;
}
.carbonad-text,
.carbonad-tag {
  float: none !important;
  display: block !important;
  width: auto !important;
  height: auto !important;
  margin-left: 145px !important;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif !important;
}
.carbonad-text {
  padding-top: 0 !important;
}
.carbonad-tag {
  text-align: left !important;
}
.carbonad #azcarbon > img {
  display: none; /* hide what I assume are tracking images */
}



/* Docs sidebar
-------------------------------------------------- */

/* By default it's not affixed in mobile views, so undo that */
.bs-sidebar.affix {
  position: static;
}

/* First level of nav */
.bs-sidenav {
  margin-top: 30px;
  margin-bottom: 30px;
  padding-top:    10px;
  padding-bottom: 10px;
  text-shadow: 0 1px 0 #fff;
  background-color: #f7f5fa;
  border-radius: 5px;
}

/* All levels of nav */
.bs-sidebar .nav > li > a {
  display: block;
  color: #716b7a;
  padding: 5px 20px;
}
.bs-sidebar .nav > li > a:hover,
.bs-sidebar .nav > li > a:focus {
  text-decoration: none;
  background-color: #e5e3e9;
  border-right: 1px solid #dbd8e0;
}
.bs-sidebar .nav > .active > a,
.bs-sidebar .nav > .active:hover > a,
.bs-sidebar .nav > .active:focus > a {
  font-weight: bold;
  color: #563d7c;
  background-color: transparent;
  border-right: 1px solid #563d7c;
}

/* Nav: second level (shown on .active) */
.bs-sidebar .nav .nav {
  /* display: none; Hide by default, but at >768px, show it */
  margin-bottom: 8px;
}
.bs-sidebar .nav .nav > li > a {
  padding-top:    3px;
  padding-bottom: 3px;
  padding-left: 30px;
  font-size: 90%;
}



/* Side notes for calling out things
-------------------------------------------------- */

/* Base styles (regardless of theme) */
.bs-callout {
  margin: 20px 0;
  padding: 15px 30px 15px 15px;
  border-left: 5px solid #eee;
}
.bs-callout h4 {
  margin-top: 0;
}
.bs-callout p:last-child {
  margin-bottom: 0;
}
.bs-callout code,
.bs-callout .highlight {
  background-color: #fff;
}

/* Themes for different contexts */
.bs-callout-danger {
  background-color: #fcf2f2;
  border-color: #dFb5b4;
}
.bs-callout-warning {
  background-color: #fefbed;
  border-color: #f1e7bc;
}
.bs-callout-info {
  background-color: #f0f7fd;
  border-color: #d0e3f0;
}



/* Special grid styles
-------------------------------------------------- */

.show-grid {
  margin-bottom: 15px;
}
.show-grid [class^="col-"] {
  padding-top: 10px;
  padding-bottom: 10px;
  background-color: #eee;
  border: 1px solid #ddd;
  background-color: rgba(86,61,124,.15);
  border: 1px solid rgba(86,61,124,.2);
}



/* Bootstrap code examples
-------------------------------------------------- */

/* Base class */
.bs-example {
  position: relative;
  padding: 45px 15px 15px;
  margin: 0 -15px -1px;
  background-color: #fafafa;
  box-shadow: inset 0 3px 6px rgba(0,0,0,.05);
  border-color: #e5e5e5 #eee #eee;
  border-style: solid;
  border-width: 1px 0;
}
/* Echo out a label for the example */
.bs-example:after {
  content: "Example";
  position: absolute;
  top:  15px;
  left: 15px;
  font-size: 12px;
  font-weight: bold;
  color: #bbb;
  text-transform: uppercase;
  letter-spacing: 1px;
}

/* Tweak display of the examples */
.bs-example + .prettyprint,
.bs-example + .highlight {
  margin-top: 0;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

/* Tweak content of examples for optimum awesome */
.bs-example > p:last-child,
.bs-example > ul:last-child,
.bs-example > ol:last-child,
.bs-example > blockquote:last-child,
.bs-example > input:last-child,
.bs-example > select:last-child,
.bs-example > textarea:last-child,
.bs-example > .table:last-child,
.bs-example > .navbar:last-child
.bs-example > .jumbotron:last-child,
.bs-example > .alert:last-child,
.bs-example > .panel:last-child,
.bs-example > .list-group:last-child,
.bs-example > .well:last-child {
  margin-bottom: 0;
}
.bs-example > p > .close {
  float: none;
}

/* Typography */
.bs-example-type .table td {
  color: #999;
  vertical-align: middle;
}
.bs-example-type .table td,
.bs-example-type .table th {
  padding: 15px 0;
  border-color: #eee;
}
.bs-example-type .table tr:first-child td,
.bs-example-type .table tr:first-child th {
  border-top: 0;
}
.bs-example-type h1,
.bs-example-type h2,
.bs-example-type h3,
.bs-example-type h4,
.bs-example-type h5,
.bs-example-type h6 {
  margin: 0;
}

/* Forms */
.bs-example.form-inline select,
.bs-example.form-inline input[type="text"],
.bs-example.form-inline input[type="password"] {
  width: 180px;
}
.bs-example-control-sizing select,
.bs-example-control-sizing input[type="text"] + input[type="text"] {
  margin-top: 10px;
}
.bs-example-form .input-group {
  margin-bottom: 10px;
}

/* List groups */
.bs-example > .list-group {
  max-width: 400px;
}

/* Navbar examples */
.bs-example .navbar:last-child {
  margin-bottom: 0;
}
.bs-navbar-top-example,
.bs-navbar-bottom-example {
  z-index: 1;
  padding: 0;
  min-height: 110px;
  overflow: hidden; /* cut the drop shadows off */
}
.bs-navbar-top-example .navbar-fixed-top,
.bs-navbar-bottom-example .navbar-fixed-bottom {
  position: relative;
  margin-left: 0;
  margin-right: 0;
}
.bs-navbar-top-example .navbar-fixed-top {
  top: -1px;
}
.bs-navbar-bottom-example .navbar-fixed-bottom {
  bottom: -1px;
}
.bs-navbar-top-example {
  -webkit-border-radius: 0 0 4px 4px;
     -moz-border-radius: 0 0 4px 4px;
          border-radius: 0 0 4px 4px;
}
.bs-navbar-top-example:after {
  top: auto;
  bottom: 15px;
  -webkit-border-radius: 0 4px 0 4px;
     -moz-border-radius: 0 4px 0 4px;
          border-radius: 0 4px 0 4px;
}
.bs-navbar-bottom-example {
  -webkit-border-radius: 4px 4px 0 0;
     -moz-border-radius: 4px 4px 0 0;
          border-radius: 4px 4px 0 0;
}
.bs-navbar-bottom-example .navbar {
  margin-bottom: 0;
}

/* Example modals */
.bs-example-modal {
  background-color: #f5f5f5;
}
.bs-example-modal .modal {
  position: relative;
  top: auto;
  right: auto;
  left: auto;
  bottom: auto;
  z-index: 1;
  display: block;
}
.bs-example-modal .modal-dialog {
  left: auto;
  margin-left: auto;
  margin-right: auto;
}

/* Example dropdowns */
.bs-example > .dropdown > .dropdown-menu,
.bs-example-submenu > .pull-left > .dropup > .dropdown-menu,
.bs-example-submenu > .pull-left > .dropdown > .dropdown-menu {
  position: static;
  display: block;
  margin-bottom: 5px;
}
.bs-example-submenu {
  min-height: 230px;
}
.bs-example-submenu > .pull-left + .pull-left {
  margin-left: 20px;
}

/* Example tabbable tabs */
.bs-example-tabs .nav-tabs {
  margin-bottom: 15px;
}

/* Tooltips */
.bs-example-tooltips {
  text-align: center;
}

/* Popovers */
.bs-example-popover {
  padding-bottom: 24px;
  background-color: #f9f9f9;
}
.bs-example-popover .popover {
  position: relative;
  display: block;
  float: left;
  width: 260px;
  margin: 20px;
}



/* Example templates
-------------------------------------------------- */

.bs-examples h4 {
  margin-bottom: 5px;
}
.bs-examples p {
  margin-bottom: 20px;
}



/* Responsive docs
-------------------------------------------------- */

/* Responsive (scrollable) doc tables */
@media (max-width: 768px) {
  .bs-table-scrollable {
    width: 100%;
    margin-bottom: 15px;
    overflow-y: hidden;
    overflow-x: scroll;
    border: 1px solid #ddd;
  }
  .bs-table-scrollable .table {
    margin-bottom: 0;
    border: 0;
  }
  .bs-table-scrollable .table th,
  .bs-table-scrollable .table td {
    white-space: nowrap;
  }
  .bs-table-scrollable .table th:first-child,
  .bs-table-scrollable .table td:first-child {
    border-left: 0;
  }
  .bs-table-scrollable .table th:last-child,
  .bs-table-scrollable .table td:last-child {
    border-right: 0;
  }
  .bs-table-scrollable .table tr:last-child th,
  .bs-table-scrollable .table tr:last-child td {
    border-bottom: 0;
  }
}

/* Related: responsive utilities tables */
.table code {
  font-size: 13px;
  font-weight: normal;
}

/* Utility classes table
------------------------- */
.bs-table th small,
.responsive-utilities th small {
  display: block;
  font-weight: normal;
  color: #999;
}
.responsive-utilities tbody th {
  font-weight: normal;
}
.responsive-utilities td {
  text-align: center;
}
.responsive-utilities td.is-visible {
  color: #468847;
  background-color: #dff0d8 !important;
}
.responsive-utilities td.is-hidden {
  color: #ccc;
  background-color: #f9f9f9 !important;
}

/* Responsive tests
------------------------- */
.responsive-utilities-test {
  margin-top: 5px;
  padding-left: 0;
  list-style: none;
  overflow: hidden; /* clear floats */
}
.responsive-utilities-test li {
  position: relative;
  float: left;
  width: 25%;
}
.responsive-utilities-test li + li {
  margin-left: 10px;
}
.responsive-utilities-test span {
  padding: 15px 10px;
  font-size: 14px;
  font-weight: bold;
  line-height: 1.1;
  text-align: center;
  border-radius: 4px;
}
.responsive-utilities-test.visible-on [class*="hidden"],
.responsive-utilities-test.hidden-on [class*="visible"] {
  color: #999;
  border: 1px solid #ddd;
}
.responsive-utilities-test.visible-on [class*="visible"],
.responsive-utilities-test.hidden-on [class*="hidden"] {
  color: #468847;
  background-color: #dff0d8;
  border: 1px solid #d6e9c6;
}



/* Footer
-------------------------------------------------- */

.bs-footer {
  padding-top: 40px;
  padding-bottom: 30px;
  margin-top: 100px;
  text-align: center;
  border-top: 1px solid #e5e5e5;
}
.bs-footer p {
  margin-bottom: 0;
  color: #777;
}
.footer-links {
  margin: 10px 0;
  padding-left: 0;
}
.footer-links li {
  display: inline;
  padding: 0 2px;
}
.footer-links li:first-child {
  padding-left: 0;
}

/* Social proof buttons from GitHub & Twitter */
.bs-social {
  margin-bottom: 20px;
}
.bs-social-buttons {
  display: inline-block;
  margin-bottom: 0;
  padding-left: 0;
  list-style: none;
}
.bs-social-buttons li {
  display: inline-block;
  line-height: 1;
}
.bs-social-buttons li + li {
  margin-left: 15px;
}
.bs-social-buttons .twitter-follow-button {
  width: 225px !important;
}
.bs-social-buttons .twitter-share-button {
  width: 98px !important;
}



/* Misc docs stuff
-------------------------------------------------- */

/* Pseudo :focus state for showing how it looks in the docs */
input.focused {
  border-color: rgba(82,168,236,.8);
  outline: 0;
  outline: thin dotted \9; /* IE6-9 */
  -moz-box-shadow: 0 0 8px rgba(82,168,236,.6);
       box-shadow: 0 0 8px rgba(82,168,236,.6);
}

/* Scrollspy demo on fixed height div */
.scrollspy-example {
  position: relative;
  height: 200px;
  margin-top: 10px;
  overflow: auto;
}

.highlight {
  padding: 9px 14px;
  margin-bottom: 14px;
  background-color: #f7f7f9;
  border: 1px solid #e1e1e8;
  border-radius: 4px;
}
.highlight pre {
  padding: 0;
  margin-top: 0;
  margin-bottom: 0;
  background-color: transparent;
  border: 0;
  white-space: nowrap;
}
.highlight pre code {
  font-size: inherit;
  color: #333; /* Effectively the base text color */
}
.highlight pre .lineno {
  display: inline-block;
  width: 22px;
  padding-right: 5px;
  margin-right: 10px;
  text-align: right;
  color: #bebec5;
}

/* Better spacing on download options in getting started */
.bs-docs-dl-options h4 {
  margin-top: 15px;
  margin-bottom: 5px;
}


/* Responsive variations
-------------------------------------------------- */

/* Hide code snippets on mobile devices */
@media screen and (max-width: 480px) {
  .highlight {
    display: none;
  }
}

/* Tablets and up */
@media screen and (min-width: 768px) {

  .bs-header {
    font-size: 21px;
    text-align: left;
  }
  .bs-header h1 {
    font-size: 60px;
    line-height: 1;
  }

  .bs-example {
    margin-left: 0;
    margin-right: 0;
    background-color: #fff;
    border-width: 1px;
    border-color: #ddd;
    border-radius: 4px 4px 0 0;
    box-shadow: none;
  }

  .carbonad {
    margin: 0 !important;
    border: 1px solid #e5e5e5 !important;
    border-radius: 4px;
  }

  /* Show the docs nav */
  .bs-sidebar {
    display: block;
  }
  /* Show the hidden subnavs when space allows it */
  .bs-sidebar .nav > .active > ul {
    display: block;
  }

  /* Tweak display of docs jumbotrons */
  .bs-masthead {
    padding-top:    140px;
    padding-bottom: 140px;
  }
  .bs-masthead h1 {
    font-size: 100px;
  }
  .bs-masthead .lead {
    margin-left: 15%;
    margin-right: 15%;
    font-size: 30px;
  }

  .bs-navbar-top-example .navbar-fixed-top,
  .bs-navbar-bottom-example .navbar-fixed-bottom {
    position: absolute;
  }

}

/* Tablets/desktops and up */
@media screen and (min-width: 992px) {

  /* Widen the fixed sidebar */
  .bs-sidebar.affix,
  .bs-sidebar.affix-bottom {
    width: 213px;
  }
  .bs-sidebar.affix {
    position: fixed; /* Undo the static from mobile-first approach */
    top: 80px;
  }
  .bs-sidebar.affix-bottom {
    position: absolute; /* Undo the static from mobile-first approach */
  }
  .bs-sidebar.affix-bottom .bs-sidenav,
  .bs-sidebar.affix .bs-sidenav {
    margin-top: 0;
    margin-bottom: 0;
  }
  .bs-header h1,
  .bs-header p {
    /*margin-right: 380px;*/
  }
  .carbonad {
    position: absolute;
    top: 20px;
    right: 0;
    padding: 15px !important;
    width: 330px !important;
    min-height: 132px;
  }
}

/* Large desktops and up */
@media screen and (min-width: 1200px) {

  /* Widen the fixed sidebar again */
  .bs-sidebar.affix-bottom,
  .bs-sidebar.affix {
    width: 270px;
  }

}
tr.r, td.r {text-align:right;}

button#topBtn {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: #563d7c;; /* Set a background color */
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 18px; /* Increase font size */
}

button#topBtn:hover {
  background-color: #555; /* Add a dark-grey background on hover */
}

.row .formula{ padding:10px 5px 10px; background-color:#f7f5fa;}

p.php {border:solid 1px #ccc;padding:10px; background-color:#f7f5fa;}
h2.series {padding:5px 15px; background-color:#756097; text-align:right;width:100%;color:#C5BCD5;}
thead.dark{background-color:#756097;color:#E9E5EF;border-color:#756097;}
tr.dark2{background-color:#9D8DB6;color:#E9E5EF;border-color:#9D8DB6;}
.hasil {color:#3F2666;}