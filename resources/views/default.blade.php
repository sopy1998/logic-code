<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Forum</title>
    <link href="http://localhost/Forum/socialirt/public/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">ForumTest</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <div class="text-light dropdown form-inline my-2 my-lg-6" style="right: 200px;">
            <button class="nav-link btn btn-primary" href="#" id="dropdown01"
                    data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Connection</button>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
                <div class="container" id="connectionContainer">
                    @component("user.connect")

                        @endcomponent
                </div>
            </div>
        </div>
        <div class="text-light dropdown form-inline my-2 my-lg-6" style="right: 150px;">
            <button class="nav-link btn btn-light" href="#" id="dropdown01"
               data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">Inscription</button>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
                <div class="container" id="inscriptionContainer">
                    @component("user.add")

                        @endcomponent
                </div>
                <div id="panelContainer" class="container" style="display: none;">
                    <button class="btn btn-danger btn-block" onclick="user.disconnect(event)">Disconnect.</button>
                </div>
            </div>
        </div>
    </div>
</nav>

<main role="main" style="margin-top: 100px;" class="container">
    @component("home.description")

        @endcomponent
</main>

<script src="http://localhost/Forum/socialirt/public/js/jquery.min.js"></script>
<script src="http://localhost/Forum/socialirt/public/js/core.js"></script>
<script src="http://localhost/Forum/socialirt/public/js/home.js"></script>
<script src="http://localhost/Forum/socialirt/public/js/bootstrap.min.js"></script>
</body>
</html>
