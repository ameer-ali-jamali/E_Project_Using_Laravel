<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>Home</title>
    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/carousel/">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- Font Awosome CDN-->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
    @include('Css_Js_php.css.bootstrap')
    @include('Css_Js_php.css.style')

</head>

<body>

    <header>

        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">E Books </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">

                    <div class="container">
                        <ul class="navbar-nav mr-auto mb-2 mb-md-0 justify-content-around">
                            <li class="nav-item active">
                                <a class="nav-link" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">All Books</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">New Bookss</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Conatact Us</a>
                            </li>
                        </ul>
                    </div>

                    <div class="container d-flex justify-content-end">
                        <div class="d-flex justify-content-around gap-2 mright">
                            <a href="/admin" class="btn btn-outline-danger" type="submit" name="signup"
                                id="signup">Admin</a>
                            <a href="/register" class="btn btn-outline-secondary" type="submit" name="signup"
                                id="signup">Register</a>
                            <a href="/login" class="btn btn-outline-primary" type="submit" name="login"
                                id="login">Login</a>
                            <form class="d-flex gap-2">
                                <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Progress Bar -->

            <div class="scroll-line"></div>

        </nav>
    </header>

    <main>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img class="bd-placeholder-img" width="100%" height="100%" src="./images/home.jpg" alt=""
                        width="100%" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img class="bd-placeholder-img" width="100%" height="100%" src="./images/home_carouserl.jpeg" alt=""
                        width="100%" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img class="bd-placeholder-img" width="100%" height="100%" src="./images/home.jpg" alt=""
                        width="100%" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">

                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">
            <div class="container d-grid">
                <div class="row">
                    @foreach ( $data as $sql)
                    <div class="col-3 col-md-3">
                        <div class="card"><img class="cardimg" src="{{ $sql->image }}" alt="" srcset="">
                            <div class="img-tittle">{{ $sql->name }}
                                <div class="rs">{{ $sql->description }}</div>
                                <button type="button" class="mybtn" onclick="addTocard()">
                                    <i class="fa fa-shopping-cart"></i> Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span>
                    </h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta
                        felis
                        euismod
                        semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                        tellus
                        ac cursus
                        commodo.</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 500x500"
                        preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                            dy=".3em">500x500</text>
                    </svg>

                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->
        </div>
        </div><!-- /.container -->


        <!-- FOOTER -->
        <footer class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>&copy; 2017-2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </main>


    <!-- Scroll Top -->
    <button type="button" class="btn btn-floating" id="btn-back-to-top"><i class="fas fa-arrow-up"></i></button>
    <!-- Scroll Top Attach Files -->

    <div class="fab">
        <a href="https://api.whatsapp.com/send?text=Hi&amp;phone=+923404889886" target="_blank"
            class="things things1"><img class="img11" style="height: 47px; width:47px;"
                src="https://www.libertybooks.com/floatingchaticons/whats.png" alt="WhatsApp"></a>
    </div>







    @include('Css_Js_php.js.helper')
    @include('Css_Js_php.js.jquery_min')

</body>

</html>
