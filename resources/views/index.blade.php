@extends('main')
@section('title', 'Home')

@section('content')

    {{-- Carousel --}}

    <div id="homePageCarousel" class="carousel carousel-dark slide" style="margin-top:-60px;">

        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="images/carousel_images/image-1.jpg" class="d-block w-100 carousel-image" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>FREE AND DISCOUNTED BESTSELLERS</h5>
                    <p>Join 150,000+ fellow readers. Get free and discounted bestsellers straight to
                        your inbox with the ManyBooks eBook deals newsletter. </p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="images/carousel_images/poster-image.jpg" class="d-block w-100 carousel-image" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>The Ultimate Guide to Free eBooks</h5>
                    <p>Not sure what to read next? Explore our catalog of public domain books with our
                        editors. Some real gems are hidden in our library.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="images/carousel_images/image-3.jpg" class="d-block w-100 carousel-image" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>LOTS OF EBOOKS. 100 % FREE</h5>
                    <p>Welcome to your friendly neighborhood library. We have more than 50,000 free
                        ebooks waiting to be discovered.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#homePageCarousel" data-bs-slide="prev">
            <i class="fa-solid fa-backward fa-lg"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#homePageCarousel" data-bs-slide="next">
            <i class="fad fa-forward fa-lg"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>




    <!-- Marketing messaging and featurettes
                                                                                                                                                                                                                                                                                                                                         ========================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    {{-- <div class="container">
        <div class="row-col-6">

            @foreach ($books as $book)
                <div class="col-3">
                    <div class="card"><img class="cardimg" src="{{ $book->image }}" alt="" srcset="">
                        <div class="img-tittle">2pk Boys Sport School Shorts (2-16 Yrs)
                            <div class="rs"></div>
                            <form action="{{ URL::to('/pdfDownload') }}" method="post">
                                <input type="text" name="{{ $book->file }}" id="" value="">
                                @auth
                                    <a href="/pdfDownload" class="btn btn-danger" id="btn">Downlaod</a>
                                    <input type="submit" name="submit" id="submit">
                                @endauth
                                @guest
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#userLoginModalForm"><i
                                            class="fas fa-sign-in"></i>&nbsp;
                                        Downlaod</a>
                                    <input type="submit" name="submit" id="submit">
                                @endguest
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div> --}}



    <div class="container">
        <div class="row-col-6">

            @foreach ($books as $book)
            @endforeach

        </div>
    </div>









    <div id="cardsCarousel" class="carousel carousel-dark slide" style="margin-top:-60px;">

        <div class="carousel-inner">

            <div class="carousel-item active" data-bs-interval="10000">
                <img src="images/carousel_images/image-1.jpg" class="d-block w-100 carousel-image" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>FREE AND DISCOUNTED BESTSELLERS</h5>
                    <p>Join 150,000+ fellow readers. Get free and discounted bestsellers straight to
                        your inbox with the ManyBooks eBook deals newsletter. </p>
                </div>
            </div>
            @foreach ($books as $book)
                <div class="carousel-item " data-bs-interval="10000">
                    <div class="row-col-3">
                        <div class="col-4">

                            <div class="card"><img class="cardimg" src="{{ $book->image }}" alt=""
                                    srcset="">
                                <div class="img-tittle">2pk Boys Sport School Shorts (2-16 Yrs)
                                    <div class="rs"></div>
                                    <form action="{{ URL::to('/pdfDownload') }}" method="post">
                                        <input type="text" name="{{ $book->file }}" id="" value="">
                                        @auth
                                            <a href="/pdfDownload" class="btn btn-danger" id="btn">Downlaod</a>
                                            <input type="submit" name="submit" id="submit">
                                        @endauth
                                        @guest
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#userLoginModalForm"><i
                                                    class="fas fa-sign-in"></i>&nbsp;
                                                Downlaod</a>
                                            <input type="submit" name="submit" id="submit">
                                        @endguest
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            @endforeach

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#cardsCarousel" data-bs-slide="prev">
            <i class="fa-solid fa-backward fa-lg"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#cardsCarousel" data-bs-slide="next">
            <i class="fad fa-forward fa-lg"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>






















    <script>
        $('#btn').click(function() {
            $('#submit').click;
        });
    </script>

@endsection
