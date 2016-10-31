<!DOCTYPE html>
<html>
<head>
    <title>
        @yield("title")
    </title>
    <meta charset='utf-8'>
    <script src="https://use.fontawesome.com/eed36b6b1e.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
</head>
<body>

    <header>
        <div class="topOfPage">
            <h1><i class="fa fa-coffee" aria-hidden="true"></i></h1>
            <h1>Coffee Break Coder</h1>
            <nav>
                <ul>
                    <li><a href="main">Home</a></li>
                    <li><a href="users">User Generator</a></li>
                    <li><a href="lorems">Ipsom Generator</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="mainBanner">
        @yield("mainBanner")
    </div>

    <di class="headline">
        @yield("headline")
    </div>

    <div class="overview">
        @yield("overview")
    </div>

    <div class="contents">
        @yield ("contents")
    </div>

    <footer>
            <div class="topFooter">
            </div>
            <div class="bottomFooter">
                <ul>
                    <li><i class="fa fa-facebook-square" aria-hidden="true"></i><a href="#">facebook</a></li>
                    <li><i class="fa fa-linkedin-square" aria-hidden="true"></i><a href="#">linkedin</a></li>
                    <li><i class="fa fa-twitter-square" aria-hidden="true"></i><a href="#">twitter</a></li>
                    <li><i class="fa fa-tumblr-square" aria-hidden="true"></i><a href="#">tumblr</a></li>
                    <li><i class="fa fa-google-plus-square" aria-hidden="true"></i><a href="#">google+</a></li>
                    <li><i class="fa fa-flickr" aria-hidden="true"></i><a href="#">flickr</a></li>
                </ul>
                <h6>2112 Settlers Lane | New York | New York | 10013 | ph: 917-815-9397</h6>
            </div>
    </footer>

</body>
</html>