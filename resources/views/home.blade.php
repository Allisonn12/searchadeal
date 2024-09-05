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


                    {{-- <div class="d-lg-none">
                        <a href="sign-in.html" class="bi-person custom-icon me-3"></a>

                        <a href="product-detail.html" class="bi-bag custom-icon"></a>
                    </div> --}}

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="index.html">Home</a>
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
                                <a class="nav-link" href="{{ route('life') }}">Life Insurence</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('funeral') }}">Funeral Cover</a>
                            </li>

                            <li class="nav-item">
                                {{-- <a class="nav-link" href="{{ route('legal') }}">Legal Cover</a> --}}
                            </li>

                            <li class="nav-item">
                                {{-- <a class="nav-link" href="{{ route('business') }}">Business Insurence</a> --}}
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="{{ asset('contact') }}">Contact</a>
                            </li>
                        </ul>

                        <div class="d-none d-lg-block">
                            <a href="sign-in.html" class="bi-person custom-icon me-3"></a>

                            <a href="product-detail.html" class="bi-bag custom-icon"></a>
                        </div>
                    </div>
                </div>
            </nav>

            <section class="slick-slideshow">
                <div class="slick-custom">
                    <img src="{{ asset('asset/image/home/Insure1.webp') }}" alt="" srcset="">

                    <div class="slick-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-10">
                                    <h6 class="slick-title">Find the perfect deal.</h6>
                                    <h4 class="slick-title">We are a search engine of deals.</h4>
                                    <p class="lead text-white mt-lg-3 mb-lg-5">
                                        Find a custom tailored deal that is suitable to your budget without compromising the quality of services our partners provide.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slick-custom">
                    {{-- <img src="https://searchadeal.co.za/wp-content/uploads/2024/02/insure4.jpg" class="img-fluid" alt=""> --}}
                    <img src="{{ asset('asset/image/home/insure4.webp') }}" alt="" srcset="">


                    <div class="slick-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-10">
                                    <h6 class="slick-title">Find the perfect deal.</h6>
                                    <h4 class="slick-title">We are a search engine of deals.</h4>
                                    <p class="lead text-white mt-lg-3 mb-lg-5">
                                        Find a custom tailored deal that is suitable to your budget without compromising the quality of services our partners provide.
                                    </p>
                                    {{-- <a href="product.html" class="btn custom-btn">Explore products</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slick-custom">
                    {{-- <img src="https://searchadeal.co.za/wp-content/uploads/2024/02/insure5.jpg" class="img-fluid" alt=""> --}}
                    <img src="{{ asset('asset/image/home/insure5.webp') }}" alt="" srcset="">


                    <div class="slick-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-10">
                                    <h6 class="slick-title">Find the perfect deal.</h6>
                                    <h4 class="slick-title">We are a search engine of deals.</h4>
                                    <p class="lead text-white mt-lg-3 mb-lg-5">
                                        Find a custom tailored deal that is suitable to your budget without compromising the quality of services our partners provide.
                                    </p>
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

                        <div class="row">
                            <div class="col-md-4">
                            <div class="row">
                                <div class="col-4">
                                    <div class="info-icons" style="">
                                        <i class="fa-solid fa-car" style=""></i>
                                    </div>
                                </div>

                                    <div class="col-8">
                                        <h4>Car Insurance</h4>
                                        <p>
                                            Financial protection: Avoid financial hardship in case of an accident.
                                            We'll help you get the coverage you need to protect your finances.
                                        </p>
                                    </div>
                            </div>
                            </div>

                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="info-icons" style="">
                                            <i class="fa-regular fa-file-lines"></i>
                                        </div>

                                    </div>
                                    <div class="col-8">
                                        <h4>Funeral Policy</h4>
                                        <p>
                                            Peace of mind: Knowing your funeral expenses are covered will give you and your family peace of mind during a difficult time.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="info-icons" style="">
                                            <i class="fa-solid fa-pills"></i>
                                        </div>

                                    </div>
                                    <div class="col-8">
                                        <h4>Life Insurance</h4>
                                        <p>
                                            Financial security: Ensure your loved ones are financially secure in your absence. Life insurance can help cover expenses like mortgage payments, education costs, and living expenses.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="dropdown-divider" style="margin:50px 0">


                        <div class="row">
                            {{-- <div class="col-md-3">
                                <div class="row">
                                        <div class="col-4">
                                            <i class="fa-solid fa-hand-holding-dollar"></i>
                                        </div>
                                        <div class="col-8">
                                            <h4>Business Insurance</h4>
                                            <p>
                                                Financial protection: Safeguard your business from unforeseen events and potential financial losses.
                                            </p>
                                        </div>
                                </div>
                            </div> --}}
                            {{-- <div class="col-md-3">
                                <div class="row">
                                        <div class="col-4">
                                            <i class="fa-solid fa-briefcase"></i>
                                        </div>
                                        <div class="col-8">
                                            <h4>Legal Cover</h4>
                                            <p>
                                                Reduced financial burden: Avoid the high costs of hiring a lawyer by utilizing your legal cover benefits.
                                            </p>
                                        </div>
                                </div>
                            </div> --}}

                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="info-icons" style="">
                                            <i class="fa-solid fa-location-pin"></i>
                                        </div>

                                    </div>
                                    <div class="col-8">
                                        <h4>Car Tracker</h4>
                                        <p>
                                            Reduced insurance costs: Some insurers offer discounts for vehicles equipped with car tracking systems.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="info-icons" style="">
                                            <i class="fa-solid fa-calendar-check"></i>
                                        </div>

                                    </div>
                                    <div class="col-8">
                                        <h4>Motor Warrantee</h4>
                                        <p>
                                            Peace of mind: Drive with confidence knowing you're protected against unforeseen mechanical breakdowns.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </section>

            <hr class="dropdown-divider" style="margin:50px 0">



            <section class="cta section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6">
                            <img src="{{ asset('asset/image/home/cta.webp') }}" style="width: 100%" alt="" srcset="">
                        </div>

                        <div class="col-md-6">
                            <div class="cta-btn">
                                <a href="#" class="btn btn-primary btn-md mb-1" style="width: 100%">Car Insurence</a>
                                <a href="{{ route('funeral') }}" class="btn btn-primary btn-md" style="width: 100%">Funeral Cover</a>
                                <a href="{{ route('life') }}" class="btn btn-primary btn-md mb-1" style="width: 100%">Life Insurence</a>
                                <a href="{{ route('car_track') }}" class="btn btn-primary btn-md" style="width: 100%">Car Tracker</a>
                                <a href="{{ route('motor') }}" class="btn btn-primary btn-md mb-1" style="width: 100%">Motor Warrenty</a>
                                {{-- <a href="{{ route('legal') }}" class="btn btn-primary btn-md" style="width: 100%">Legal Cover</a> --}}
                                {{-- <a href="{{ route('business') }}" class="btn btn-primary btn-md" style="width: 100%">Business Insurence</a> --}}
                            </div>
                        </div>

                    </div>
                </div>
            </section>





        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">


                    <div class="col-sm-3">
                        <img src="https://searchadeal.co.za/wp-content/uploads/2024/02/Search_A_Deal_white_font_large-1024x1024.png" style="height: 12rem" class="image-responsive" style="width: 100%; height:auto" alt="">
                    </div>

                    <div class="col-sm-3">
                        <h5 class="text-white ">Our Services</h5>
                        <hr style="width: 20%; color: #6ec1e4; height: 5px;">
                        <ul class="text-left" style="text-align: left !important">
                            <li class="footer-menu-item" style="text-align: left"><i class="fa-solid fa-right-long" style="color: #6ec1e4"></i>  <a href="{{ route('car') }}" class="footer-menu-link">Car Insurence</a></li>
                            <li class="footer-menu-item" style="text-align: left"><i class="fa-solid fa-right-long" style="color: #6ec1e4"></i>  <a href="#" class="footer-menu-link">Funeral Cover</a></li>
                            <li class="footer-menu-item" style="text-align: left"><i class="fa-solid fa-right-long" style="color: #6ec1e4"></i>  <a href="#" class="footer-menu-link">Life Inserence</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-3">
                        <h5 class="text-white ">Our Services</h5>
                        <hr style="width: 20%; color: #6ec1e4; height: 5px;">
                        <ul class="text-left" style="text-align: left !important">
                            <li class="footer-menu-item" style="text-align: left"><i class="fa-solid fa-right-long" style="color: #6ec1e4"></i>  <a href="{{ route('motor') }}" class="footer-menu-link">Motor Warrenty</a></li>
                            <li class="footer-menu-item" style="text-align: left"><i class="fa-solid fa-right-long" style="color: #6ec1e4"></i>  <a href="{{ route('car_track') }}" class="footer-menu-link">Car Tracker</a></li>
                            <li class="footer-menu-item" style="text-align: left"><i class="fa-solid fa-right-long" style="color: #6ec1e4"></i>  <a href="#" class="footer-menu-link">Funeral Cover</a></li>
                            {{-- <li class="footer-menu-item"><a href="#" class="footer-menu-link"> Cover</a></li> --}}
                        </ul>
                    </div>

                    <div class="col-sm-3">
                        <h5 class="text-white ">Additional Links</h5>
                        <hr style="width: 20%; color: #6ec1e4; height: 5px;">
                        <ul class="text-left" style="text-align: left !important">
                            <li class="footer-menu-item" style="text-align: left"><i class="fa-solid fa-right-long" style="color: #6ec1e4"></i>  <a href="#" class="footer-menu-link">Privacy & Policy</a></li>
                            <li class="footer-menu-item" style="text-align: left"><i class="fa-solid fa-right-long" style="color: #6ec1e4"></i>  <a href="#" class="footer-menu-link">Terms Of Use</a></li>
                            <li class="footer-menu-item" style="text-align: left"><i class="fa-solid fa-right-long" style="color: #6ec1e4"></i>  <a href="#" class="footer-menu-link">Disclaimer</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="{{ asset('asset/js/jquery.min.js') }}"></script>
        <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('asset/js/Headroom.js') }}"></script>
        <script src="{{ asset('asset/js/jQuery.headroom.js') }}"></script>
        <script src="{{ asset('asset/js/slick.min.js') }}"></script>
        <script src="{{ asset('asset/js/custom.js') }}"></script>

    </body>
</html>
