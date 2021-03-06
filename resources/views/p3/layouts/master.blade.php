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
                    <li><a href="/">Home</a></li>
                    <li><a href="users">User Generator</a></li>
                    <li><a href="lorems">Lorem Generator</a></li>
					<li><a href="password">Password Generator</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="mainBanner">
        @yield("mainBanner")
    </div>

    <div class="headline">
        @yield("headline")
    </div>

    <div class="overview">
        @yield("overview")
    </div>

    <div class="forms">
        @yield("forms")
    </div>
    
    <div class = "error">
        @yield("error") 
    </div>
    
    <div class="output">
        @yield("output")
    </div>

    <footer>
            <div class="topFooter">
            </div>
            <div class="bottomFooter">
                <p><i class="fa fa-coffee" aria-hidden="true"></i> Coffee Break Coder</p>
                <p>&copy; {{ date('Y') }}</p>
            </div>
    </footer>

</body>
</html>