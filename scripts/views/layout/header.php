<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" lang="pl"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
              integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
              crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="../css/style.css">
        <title></title>
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script>
            (function() {
                'use strict'

                if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
                    var msViewportStyle = document.createElement('style')
                    msViewportStyle.appendChild(
                            document.createTextNode(
                                    '@-ms-viewport{width:auto!important}'
                                    )
                            )
                    document.head.appendChild(msViewportStyle)
                }

            }())
        </script>
        <style type="text/css">
            body {
                padding-top: 5rem;
            }

            .starter-template {
                padding: 3rem 1.5rem;
                text-align: center;
            }
            .border1{
            padding-left:60px;
            padding-top:5px;
            color:green;
            font-size:18px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#">System Zarządzania Dostawami</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Strona startowa <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dostawcy</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="/dostawcy/index">Spis</a>
                            <a class="dropdown-item" href="/dostawcy/add">Dodaj dostawcę</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dostawy</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="<?= BASE_URL.'/dostawy/index'?>">Szukaj</a>
                            <a class="dropdown-item" href="<?= BASE_URL.'/dostawy/add'?>">Dodaj dostawę</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Asortyment</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="<?= BASE_URL.'/artykuly/index'?>">Spis artykułów</a>
                            <a class="dropdown-item" href="<?= BASE_URL.'/gatunekTowaru/index'?>">Spis rodzaj asortymentu</a>
                            <a class="dropdown-item" href="<?= BASE_URL.'/gatunekTowaru/add'?>">Dodaj gatunek asortymentu</a>
                            <a class="dropdown-item" href="<?= BASE_URL.'/artykuly/add'?>">Dodaj produkt</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Zadania</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="<?= BASE_URL.'/dostawcy/index'?>">Spis</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inne</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="#">Ustaw Alert</a>
                            <a class="dropdown-item" href="<?= BASE_URL.'/miary/index'?>">Pokaż jednostki miar</a>
                            <a class="dropdown-item" href="<?= BASE_URL.'/miary/add'?>">Dodaj jednostkę miary</a>
                            <a class="dropdown-item" href="<?= BASE_URL.'/rejestracja/rejestracja'?>">Zarejestruj użytkownika</a>
                            <a class="dropdown-item" href="<?= BASE_URL.'/zmienHaslo/index'?>">Zmień Hasło</a>
                        </div>
                    </li>
                

                       <div class="nav-item border1">
                    
                        <?php if (Session::get("loggedin")): ?>
                            <li class="nav-item list-inline-item  label-success">Jesteś zalogowany jako:
                                <?= Session::get("user") . "  " ?></li>
                            <li class="list-inline-item"><a href="../logowanie/logout">Wyloguj</a></li>
                        <?php endif; ?>
                    
                       </div>
                </ul>




                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <div class="container" style="margin-top:30px">



