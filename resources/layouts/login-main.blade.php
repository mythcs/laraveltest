<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SG to Pontian &amp; Kukup</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/mdb.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>

<body class="teal lighten-4">

    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark elegant-color">
            <a class="navbar-brand" href="#"><strong>SG to Pontian &amp; Kukup</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a target="_blank" href="https://www.facebook.com/SG2Pontian.n.Kukup" class="nav-link"><i class="fa fa-facebook fa-lg"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Contact No: 8748 8258"><i class="fa fa-phone-square fa-lg"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="pt-5 mt-5">
        @yield('content')
    </main>
    
    <!-- SCRIPTS -->
    <script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/js/popper.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/mdb.min.js"></script>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    
    @yield('javascript')
    
</body>

</html>