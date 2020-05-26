@@ -1,127 +1,168 @@
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap 4 Website Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/frontend/app.css">
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
    <title>Bootstrap 4 Website Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/frontend/app.css">
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="col-md-8 mx-auto ">
            <div class="collapse navbar-collapse navbar-ex1-collapse auto" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <div class="collapse navbar-collapse navbar-ex1-collapse auto" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</nav>


<div class="jumbotron text-center" style="margin-bottom:0">
    <h1>Time Clock</h1>
    <p>Running</p>
    <h1>Time Clock</h1>
    <p>Running</p>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="col-md-8 mx-auto ">
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-8 mx-auto ">
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-8">
            <div>
                <h5>user name  <span class="small">date </span></h5>
                <h5>Title description, Dec 7, 2017</h5>
                <p class="small"><h6>Example heading <span class="badge badge-secondary">like:20</span></h6>
                </p>
            </div>
            <div>
                <h5>user name  <span class="small">date </span></h5>
                <h5>Title description, Dec 7, 2017</h5>
                <p class="small"><h6>Example heading <span class="badge badge-secondary">like:20</span></h6>
                </p>
            </div>
            <hr>
            <div>
                <h5>user nam</h5>
                <h5>Title description, Dec 7, 2017</h5>

                <p>Some text..</p>
            </div>

        </div>
        <div class="col-sm-4">
            <div class="card"  ">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class="smaill text-muted">athor</p>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="box">
                            <img class="float-left mx-sm-4 avatar rounded-circle" src="https://www.w3schools.com/cssref/pineapple.jpg"
                                 alt="">
                            <div>
                                <h5><a href="">Athor jr</a> <span class="small  mx-sm-5">date,22/2/2222 </span></h5>
                                <a>Minify file and obfuscate CSS class names , Dec 7, 2017 Minify file and obfuscate CSS class names ,
                                    Dec 7, 2017Minify file and obfuscate CSS class names ,
                                </a>
                                <br> <br>
                                <div class="mx-sm-4">
                                    <i class="fa fa-thumbs-up mx-sm-1">11</i>
                                    <i class="fa fa-comments mx-sm-1">22</i>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="box">
                            <img class="float-left mx-sm-4 avatar rounded-circle" src="https://www.w3schools.com/cssref/pineapple.jpg"
                                 alt="">
                            <div>
                                <h5><a href="">Athor jr</a> <span class="small  mx-sm-5">date,22/2/2222 </span></h5>
                                <a>Minify file and obfuscate CSS class names , Dec 7, 2017 Minify file and obfuscate CSS class names ,
                                    Dec 7, 2017Minify file and obfuscate CSS class names ,
                                </a>
                                <br> <br>
                                <div class="mx-sm-4">
                                    <i class="fa fa-thumbs-up mx-sm-1">11</i>
                                    <i class="fa fa-comments mx-sm-1">22</i>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="box">
                            <img class="float-left mx-sm-4 avatar rounded-circle" src="https://www.w3schools.com/cssref/pineapple.jpg"
                                 alt="">
                            <div>
                                <h5><a href="">Athor jr</a> <span class="small  mx-sm-5">date,22/2/2222 </span></h5>
                                <a>Minify file and obfuscate CSS class names , Dec 7, 2017 Minify file and obfuscate CSS class names ,
                                    Dec 7, 2017Minify file and obfuscate CSS class names ,
                                </a>
                                <br> <br>
                                <div class="mx-sm-4">
                                    <i class="fa fa-thumbs-up mx-sm-1">11</i>
                                    <i class="fa fa-comments mx-sm-1">22</i>
                                </div>
                                <hr>
                            </div>
                        </div>

                    </div>
                </div>
                <hr>
                <div class="card"  ">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="smaill text-muted">athor</p>
                    <div class="col-sm-4">
                        <h3>List posts</h3>
                        <div class="card"
                        ">
                        <div class="card-body">
                            <p class="card-text"><a href="">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</a></p>
                            <p class="smaill text-muted font-italic">athor</p>
                            <i class="fa fa-thumbs-up mx-sm-1">11</i>
                            <i class="fa fa-thumbs-down mx-sm-1">11</i>
                            <i class="fa fa-comments mx-sm-1">22</i>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="card"  ">
                <div class="card"
                ">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="card-text"><a href="">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</a></p>
                    <p class="smaill text-muted font-italic">athor</p>
                    <i class="fa fa-thumbs-up mx-sm-1">11</i>
                    <i class="fa fa-thumbs-down mx-sm-1">11</i>
                    <i class="fa fa-comments mx-sm-1">22</i>
                </div>
            </div>
            <hr >
        </div>
    </div>
    <hr>
    <div class="card"
    ">
    <div class="card-body">
        <p class="card-text"><a href="">Some quick example text to build on the card title and make up the bulk of the
                card's content.</a></p>
        <p class="smaill text-muted font-italic">athor</p>
        <i class="fa fa-thumbs-up mx-sm-1">11</i>
        <i class="fa fa-thumbs-down mx-sm-1">11</i>
        <i class="fa fa-comments mx-sm-1">22</i>
    </div>
</div>
<hr>
</div>
</div>
</div>
<div class="jumbotron text-center" style="margin-bottom:0">
    <p>Footer</p>
    <p>Footer</p>
</div>
</body>
