<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="Allison Masemola, Gunneke Petersen">

        <title>Search A Deal</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        {{-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet"> --}}

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/css/bootstrap-icons.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('asset/css/slick.css') }}"/>
        <link rel="stylesheet" href="{{ asset('asset/css/tooplate-little-fashion.css') }}"/>

        <link href="css/tooplate-little-fashion.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            .body{
                font-family: "poppins", sans-serif;
            }
            .info-icons{
                background: #6ec1e4;
                border-radius:100%;
                width:1rem;
                height:1rem;
                display:flex;
                align-items:center;
                justify-content:center;
                padding:30px
            }
            .info-icons i{
                font-size: 28px;
                color:#fff;
            }
            .contact-icons{
                font-size: 34px;
                font-weight: 100;
                color: #6ec1e4;
                text-align: center;
                margin-bottom: 10px;
            }
            .info-section h4{
                font-size: 16px;
                font-weight: 600;
                border-left: 3px solid#6ec1e4;
                padding-left: 10px;
            }
            .info-section h3{
                font-size: 24px;
                line-height: 31px;
                font-weight: 600;
            }
            .contact-info h5{
                font-size: 16px;
                line-height: 19px;
                color: #1e293b;
                font-weight: 600;
            }
            .contact-info a{
                font-size: 16px;
                line-height: 19px;
                color: #1e293b;
                font-weight: 400;
            }

        </style>
    </head>

    <body>

        {{-- <section class="preloader">
            <div class="spinner">
                <span class="sk-inner-circle"></span>
            </div>
        </section> --}}

        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link " href="/">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Car Insurence <i class="fa-solid fa-plus"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('car_track') }}">Car Tracker</a></li>
                                    <li><a class="dropdown-item" href="{{ route('motor') }}">Motor Warrenty</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                </ul>
                              </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Loans <i class="fa-solid fa-plus"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  {{-- <li><a class="dropdown-item" href="{{ route('business') }}">Business Loan</a></li> --}}
                                  <li><a class="dropdown-item" href="#">Payday Loans</a></li>
                                  <li><a class="dropdown-item" href="#">Personal Loans</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                </ul>
                              </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Life Insurence</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Funeral Cover</a>
                            </li>

                            <li class="nav-item">
                                {{-- <a class="nav-link" href="{{ route('legal') }}">Legal Cover</a> --}}
                            </li>

                            <li class="nav-item">
                                {{-- <a class="nav-link" href="{{ route('business') }}">Business Insurence</a> --}}
                            </li>


                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('contact') }}">Contact</a>
                            </li>
                        </ul>

                        <div class="d-none d-lg-block">
                            <a href="sign-in.html" class="bi-person custom-icon me-3"></a>

                            <a href="product-detail.html" class="bi-bag custom-icon"></a>
                        </div>
                    </div>
                </div>
            </nav>

            <section class="slick">

                <div class="slick-custom">
                    {{-- <img src="https://searchadeal.co.za/wp-content/uploads/2024/02/insure5.jpg" class="img-fluid" alt=""> --}}
                    <img src="{{ asset('asset/image/contact/insure20.webp') }}" alt="" srcset="">


                    <div class="slick-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-10">
                                    <div class="h-left">
                                        <h6 class="slick-title">Contact US</h6>

                                    </div>
                                    {{-- <a href="contact.html" class="btn custom-btn">Work with us</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>



            <section class="info-section section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h4>GET IN TOUCH</h4>
                            <h3>Don't Hesitate to Ask a Question.</h3>
                        </div>

                        <div class="col-sm-6">
                            <h4>Contact Info</h4>
                            <hr style="width: 50px; height:3px;">
                            <div class="contact-info">
                                <div class="row">

                                    <div class="col-3">
                                        <div class="icon">
                                            <div class="contact-icons">
                                                <i class="fa-regular fa-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <h5>General Info</h5>
                                        <p>
                                            <a style="color: #000" href="mailto:info@searchadeal.co.za">info@searchadeal.co.za</a>
                                        </p>
                                    </div>

                                    <div class="col-3">
                                        <div class="icon">
                                            <div class="contact-icons">
                                                <i class="fa-regular fa-envelope-open"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <h5>Business Development</h5>
                                        <p>
                                            <a style="color: #000" href="mailto:karen@searchadeal.co.za">karen@searchadeal.co.za</a>
                                        </p>
                                        <p>
                                            Business Developer
                                        </p>
                                    </div>

                                    <div class="col-3">
                                        <div class="icon">
                                            <div class="contact-icons">
                                                <i class="fa-regular fa-clock"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <h5>Mon - Sat 09:00 - 17:00</h5>
                                        <p>
                                            Sunday Closed
                                        </p>
                                    </div>

                                    <div class="col-3">
                                        <div class="icon">
                                            <div class="contact-icons">
                                                   <i class="fa-solid fa-map-pin"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <h5>General Info</h5>
                                        <p>
                                            <address>Hurlingham Office Park 59 Woodlands Ave, Hurlingham, Sandton, 2196</address>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="cta section-padding">
                <div class="container-fluid">
                    <div class="row">
                       <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14333.216902790124!2d28.023385!3d-26.088986!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e95736157ac0557%3A0x62ea6a22e37aa7e9!2sHurlingham%20Office%20Park!5e0!3m2!1sen!2sus!4v1725289422458!5m2!1sen!2sus" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                       </div>
                    </div>
                </div>
            </section>





        </main>

        <!-- JAVASCRIPT FILES -->
        <script src="{{ asset('asset/js/jquery.min.js') }}"></script>
        <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('asset/js/Headroom.js') }}"></script>
        <script src="{{ asset('asset/js/jQuery.headroom.js') }}"></script>
        <script src="{{ asset('asset/js/slick.min.js') }}"></script>
        <script src="{{ asset('asset/js/custom.js') }}"></script>

    </body>
</html>
