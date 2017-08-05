<html><head><title>maratropa: all</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <style>/*
      colors
      red: #e51837; rgb(229,24,55)
      gray: #808080;
            */

            /************Reset**************/
            * { 
                -moz-box-sizing: border-box; 
                -webkit-box-sizing: border-box; 
                box-sizing: border-box; 
            }
            html, body, div, object, iframe, fieldset { 
                margin: 0; 
                padding: 0; 
                border: 0;
            } 
            ol, ul { 
                list-style: none;
                margin: 0;
                padding: 0;
            } 
            table { 
                border-collapse: collapse; 
                border-spacing: 0; 
            }
            header, footer, nav, section, article, hgroup, figure {
                display: block;	
            }
            legend {
                display: none;
            }
            /************End Reset**************/

            /************Global**************/
            body {
                background: #fff;
                color: #000;
                font: 100%/1.4 "HelveticaNeue", "Helvetica", "Arial", sans-serif;
                padding: 0;
                -webkit-text-size-adjust: none;
            }
            a {
                color: #808080;
                text-decoration: none;
            }
            a:hover, a:focus {
                color: #e51837;
            }
            p {
                margin: 0 0 1em;
            }
            img, object, video {
                max-width: 100%;
                border: 0;
            }
            a img {
                border: 0;
                outline: 0;
            }
            h1 {
                font-size: 3em;
                line-height: 1;
                letter-spacing: -0.02em;
                margin-bottom: 0.2em;
            }
            h2 {
                font-size: 2em;
                line-height: 1.1;
                margin-bottom: 0em;
            }
            h3 {
                font-weight: normal;
                line-height: 1.1;
                padding-bottom: 0em;
                border-bottom: 1px solid #ccc;
            }
            h1 a, h2 a, h3 a {
                display: block;
                color: #000;
            }
            h1 a:hover, h2 a:hover, h3 a:hover {
                color: #e51837;
            }
            blockquote {
                border-left: 0.5em solid #ddd;
                padding-left: 1em;
                margin-left: 1em;
            }
            small {
                color: #e51837;
            }

            input, textarea {
                border: 1px solid #000;
            }

            input[type=search] {
                -webkit-appearance: none;
                border-radius: 0;
            }
            ::-webkit-input-placeholder {
                color: #808080;
            }
            :-moz-placeholder {  
                color: #808080;
            }
            /************End Global**************/

            /************Classes**************/
            .inactive {
                color: #ddd;
            }
            /************End Classes**************/

            /************Structure**************/
            .container {
                max-width: 70em;
                margin: 0 auto;
                padding: 0 ;
                overflow: hidden;
            }
            div[role=main] {
                padding-bottom: 0em;
            }

            /*Footer*/
            footer[role=contentinfo] {
                color: #fff;
                background: #000;
                margin: 0 -1em;
                position: relative;
                z-index: 2;
            }
            footer[role=contentinfo] > div {
                max-width: 70em;
                padding: 0 0em;
                margin: 0 auto;
                overflow: hidden;
            }
            footer[role=contentinfo] p {
                margin: 0;
            }
            footer[role=contentinfo] .nav li a {
                display: block;
                border-bottom: 1px solid #808080;
                padding: 0em;
                margin: 0 -1em;
            }
            footer[role=contentinfo] a {
                display: inline-block;
                padding: 0.5em 0;
            }
            footer[role=contentinfo] a.nav-home {
                color: #fff;
            }
            footer[role=contentinfo] .f-rga {
                padding: 0.6em 0;
            }
            footer[role=contentinfo] img {
                max-width: 4.4em;
                display: inline-block;
                margin-bottom: -0.22em;
            }
            /*End Footer*/

            /*Grid*/
            .grid {
                margin: 0em;
                overflow: hidden;
            }
            .grid:target {
                -webkit-animation: fadeout 5s 1 ease-out;
                -moz-animation: fadeout 5s 1 ease-out; 
                -o-animation: fadeout 5s 1 ease-out;
                animation: fadeout 5s 1 ease-out; 
            }
            .grid > h2 {
                margin-left: 0em;
            }
            .grid > section {
                padding: 0em 0em 0em;
            }
            .grid > section:target {
                -webkit-animation: fadeout 5s 1 ease-out;
                -moz-animation: fadeout 5s 1 ease-out; 
                -o-animation: fadeout 5s 1 ease-out;
                animation: fadeout 5s 1 ease-out; 
            }
            .grid ul {
                overflow: hidden;
            }
            .grid ul li {
                margin-bottom: 0em;
            }
            .featured:after {
                content: "*";
                color: #e51837;
            }

            /*Fluid*/
            .fluid {
                display: block;
                margin: 0 auto;
                max-width: 40em;
            }

            /*Homepage*/
            .home h1 {
                margin-bottom: 0.2em;
            }
            .intro {
                font-size: 1.8em;
                line-height: 1.2;
                margin: 0 auto;
            }
            .intro a:hover ,.intro a:focus {
                color: #000;
                border-bottom-color: #000;
            }

            .ani {
                position: relative;
                height: 15em;
                margin: 1em 0 0;
                width: 100%;
                z-index: 0;
            }
            .ani div {
                width: 100%;
            }
            .ani div b {
                display: block;
                position: absolute;
                top: 5%;
                right: 5%;
                bottom: 5%;
                left: 5%;
                background: rgba(229,24,55,0.22);
            }

            /* Button Stlyes */
            .block-btn {
                color: #fff;
                background: #000;
                display: inline-block;
                margin: 1.5em 0;
                font-size: 110%;
                padding: 1em;
            }
            .block-btn:hover, .block-btn:focus {
                color: #fff;
                background: #e51837;
            }

            /*Patterns*/
            .mod {
                padding: 1em;
            }
            


            /*Blog*/
            /*Blog Header*/
            .blog .container {
                max-width: 62em;
            }
            .blog header[role=banner] {
                overflow: hidden;
                margin-bottom: 2em;
                padding: 2em 0 1em;
                border-bottom: 1px solid #000;
            }
            .blog-logo {
                font-weight: normal;
                font-size: 1.2em;
                margin: 0 0 1em;
            }
            .blog-logo img {
                width: 3.3em;
            }
            .blog-logo a {
                color: #000;
            }
            .search-form {
                width: 100%;
                margin-bottom: 1em;
            }
            .search-field {
                width: 100%;
                padding: 0.5em 0;
                border: 0;
                border-bottom: 1px solid #808080;
                outline: none;
            }
            .search-field:focus {
                background: #e51837;
                color: #fff;
            }
            .search-field:focus::-webkit-input-placeholder {
                color: #fff;
            }

            .search-field:focus :-moz-placeholder {  
                color: #fff; 
            }

            .blog .nav {
                clear: both;
            }
            .blog .nav a {
                display: block;
                font-weight: bold;
                color: #000;
            }
            .blog .nav a:hover {
                color: #e51837;
            }

            /*Posts*/
            .posts ol > li {
                padding-bottom: 1em;
                border-bottom: 1px solid #ccc;
                margin-bottom: 1em;
                overflow: hidden;
            } 
            .posts h2 {
                font-size: 1.4em;
                margin: 0.28em 0 0.1em;
                font-weight: normal;
            }
            .posts h2 a {
                color: #000;
            }
            .posts h2 a:hover, .posts h2 a:focus {
                color: #e51837;
            }
            .permalink {
                display: block;
                font-size: 0.8em;
                margin-bottom: 1.2em;
            }
            .post-body a {
                border-bottom: 1px solid #ccc;
            }
            .posts blockquote {
                margin: 0 0 1em;
                color: #666;
                border-left: 0.25em solid #ccc;
                padding-left: 1em;
            }
            .tags {
                float: left;
            }
            .tags li {
                display: inline-block;
                font-size: 0.8em;
                margin-right: 0.5em;
            }

            .posts ol > li .tags a, .permalink {
                color: #ccc;
                -webkit-transition: color 0.3s ease-out;  
                -moz-transition: color 0.3s ease-out;  
                -ms-transition: color 0.3s ease-out;  
                -o-transition: color 0.3s ease-out;  
                transition: color 0.3s ease-out;
            }
            .posts ol > li:hover .tags a, .posts ol > li:hover .permalink {
                color: #808080;
            }
            .blog-nav {
                text-align: center;
                overflow: hidden;
                padding: 1em 0;
            }
            .posts .blog-nav a {
                border: 0;
            }
            .nav-next {
                float: right;
            }
            .nav-prev {
                float: left;
            }

            /* Sidebar */
            .sidebar {
                font-size: 0.8em;
                padding-bottom: 1.4em;
            }
            .sidebar div {
                margin-bottom: 2em;
            }
            .sidebar h3 {
                font-weight: bold;
                font-size: 0.9em;
                line-height: 1;
                border-bottom: 1px solid #000;
            }
            .sidebar a {
                color: #808080;
            }
            .sidebar a:hover, .sidebar a:focus {
                color: #e51837;
            }
            .social-links {
                overflow: hidden;
            }
            .social-links li {
                float: left;
                margin-right: 1.2em;
            }
            .social-links li a {
                display: block;
                height: 17px;
                width: 16px;
                text-indent: -99999em;
                background: url(images/sprite_social.png) no-repeat;
            }
            .social-links li a.s-fb {
                background-position: -0px -76px;
            }
            .social-links li a.s-fb:hover {
                background-position: -16px -76px;
            }
            .social-links li a.s-twitter {
                background-position: -0px -37px;
            }
            .social-links li a.s-twitter:hover {
                background-position: -16px -37px;
            }
            .social-links li a.s-linkedin {
                background-position: -0px -113px;
            }
            .social-links li a.s-linkedin:hover {
                background-position: -16px -113px;
            }
            .social-links li a.s-rss {
                background-position: -0px -0px;
            }
            .social-links li a.s-rss:hover {
                background-position: -16px -0px;
            }



            .top {
                clear: both;
                display: block;
                padding: 1em 0;
            }
            .top:before {
                content: 'â–²';
            }


            /* Wufoo Form */
            .wufoo-form {
                margin: 2em 0;
            }

            /******Media Queries*******/

            /* Medium Screens*/
            @media all and (min-width: 35em) {
                .blog-logo {
                    float: left;
                    font-size: 2em;
                    margin: 0 0 1em;
                }
                .blog-logo img {
                    width: auto;
                }
            }
            @media all and (min-width:40em) {
                h1 {
                    font-size: 5.6em;
                }
                .container {
                    padding-bottom: 4em;
                }
                footer[role=contentinfo] {
                    position: fixed;
                    bottom: 0;
                    left: 0;
                    width: 100%;
                    margin: 0;
                }
                footer[role=contentinfo] .nav {
                    float: left;
                }
                footer[role=contentinfo] .nav li {
                    display: inline-block;
                    margin-right: 0.8em;
                }
                footer[role=contentinfo] .nav li a {
                    border: 0;
                }
                footer[role=contentinfo] .f-rga {
                    float: right;
                }
                .grid ul li {
                    width: 50%;
                    float: left;
                }
                .grid ul li:nth-child(odd) {
                    padding-right: 0em;
                    clear: left;
                }
                .ani {
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 4em;
                    left: 0;
                    width: 100%;
                    height: 90%;
                    margin: 0;
                    z-index: 0;
                }
                .home {
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 5em;
                    left: 0;
                    z-index: 1;
                    width: 100%;
                    height: 90%;
                    display: table;
                    text-align: center;
                    color: #fff;
                    color: rgba(255,255,255,0.7);
                }
                .home > div {
                    display: table-cell;
                    vertical-align: middle;
                }
                .home .intro a {
                    color: #fff;
                    color: rgba(255,255,255,0.8);
                    border-bottom: 1px solid rgba(255,255,255,0.8);
                }
                .home .intro a:hover, .home .intro a:focus {
                    color: #000;
                    border-bottom-color: #000;
                }


                /*Blog*/

                .search-form {
                    float: right;
                    width: 30%;
                    max-width: 16em;
                    padding-left: 0.8em;
                    margin-top: 0.4em;
                }

                .posts {
                    float: left;
                    width: 64%;
                }
                .sidebar {
                    float: right;
                    width: 30%;
                    max-width: 21em;
                    margin: 0 0 1em;
                    padding-left: 0.8em;
                }
            }


            /* Large Screens */
            @media all and (min-width: 54em) {
                h1 {
                    font-size: 6.4em;
                }
                .grid > section {
                    float: left;
                    width: 33.3333333%;
                }
                .grid > section:nth-of-type(3n+1) {
                    clear: left;
                }
                .grid ul li {
                    width: auto;
                    float: none;
                }
                .grid ul li:nth-child(odd) {
                    padding-right: 0;
                }
            }	


            /* CSS Animations */
            @-webkit-keyframes fadeout {
                0%   { background: #fff; }
                10%   { background: #eee; }
                100% { background: #fff; }
            }
            @-moz-keyframes fadeout {
                0%   { background: #fff; }
                10%   { background: #eee; }
                100% { background: #fff; }
            }
            @-o-keyframes fadeout {
                0%   { background: #fff; }
                10%   { background: #eee; }
                100% { background: #fff; }
            }
            @keyframes fadeout {
                0%   { background: #fff; }
                10%   { background: #eee; }
                100% { background: #fff; }
            }
            .g {
                padding: 0em;
                overflow: hidden;
            }
            .g li {
                float: left;
                width: 50%;
                padding: 0em;
            }
            .g img {
                display: block;
            }
            .g li:nth-child(odd) {
                clear: left;
            }
            
            @media screen and (max-width: 40em) {
                .g li {
                    width: 100%; 
                }
                .g li:nth-child(3n+1) {
                    clear: left;
                }
                .g li:nth-child(odd) {
                    clear: none;
                }
            }
            

            @media screen and (min-width: 80em) {
                .g li {
                    width: 33.3333333333333333%; 
                }
                .g li:nth-child(3n+1) {
                    clear: left;
                }
                .g li:nth-child(odd) {
                    clear: none;
                }
            }
            @media screen and (min-width: 110em) {
                .g li {
                    width: 25%; 
                }
                .g li:nth-child(4n+1) {
                    clear: left;
                }
                .g li:nth-child(3n+1) {
                    clear: none;
                }
            }
            @media screen and (min-width: 144em) {
                .g li {
                    width: 20%; 
                }
                .g li:nth-child(5n+1) {
                    clear: left;
                }
                .g li:nth-child(4n+1) {
                    clear: none;
                }
            }
            @media screen and (min-width: 180em) {
                .g li {
                    width: 16.666666666%; 
                }
                .g li:nth-child(6n+1) {
                    clear: left;
                }
                .g li:nth-child(5n+1) {
                    clear: none;
                }
            }
        </style>

    </head>

    <body>

        <!--Pattern HTML-->

        <div id="pattern" class="pattern">
            <ul class="g" id="Grid">
                <?php
                $dirname = "user/";
                $images = glob($dirname . "*.jpg");
                foreach ($images as $image) {
                    echo '<li><a href="/' . str_replace(".jpg", "", str_replace("user/", "", $image)) . '"><img src="' . $image . '"/></a></li>';
                }
                ?>
            </ul>
        </div>
        <!--End Pattern HTML-->


    </body>
</html>

