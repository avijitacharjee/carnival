<!DOCTYPE html>
<html dir="ltr" lang="en">


<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta charset="utf-8">
    <meta name="description" content="Fincox || Financial & Corporate Business HTML5 Template">
    <meta name="keywords"
        content="agency, audit, broker, business, company, consulting, corporate, creative, financial, portfolio, responsive, startup ">
    <meta name="author" content="Theme Garbage">
    <!-- Title -->
    <title>Carnival Offset Printers</title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{ asset('/img/favicon.png') }}">
    <!-- Apple Touch Icons -->


    <!-- Stylesheets Start -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700,800" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->
</head>

<body>
    <!-- Live Chat Start -->
    <script src="{{ asset('/../../../../code.tidio.co_443/rdu58dqsiymikhfizchesvzwvkx6zp4f.js') }}" async></script>
    <!-- Live Chat End -->
    <!-- Preloader Start -->
    <!-- <div id="preloader">
  <div id="preloader-status"></div>
 </div> -->
    <!-- Preloader End -->
    <!-- Header Start -->
    <header>
        <!-- Header Topbar Start -->
        <!-- <div class="header-top">
   <div class="container">
    <div class="row">
     <div class="col-md-9 col-sm-8">
      <div class="header-left">
       <ul>
        <li>We Provide lifetime support</li>
        <li><i class="icofont-ui-touch-phone"></i>+00 0123456789</li>
        <li><i class="icofont-envelope"></i>info@finixpro.com</li>
       </ul>
      </div>
     </div>
     <div class="col-md-3 col-sm-4">
      <div class="header-right-div">
       <div class="soical-profile">
        <ul>
         <li><a href="{{ url('#') }}"><i class="icofont-facebook"></i></a></li>
         <li><a href="{{ url('#') }}"><i class="icofont-twitter"></i></a></li>
         <li><a href="{{ url('#') }}"><i class="icofont-linkedin"></i></a></li>
         <li><a href="{{ url('#') }}"><i class="icofont-skype"></i></a></li>
         <li><a href="{{ url('#') }}"><i class="icofont-pinterest"></i></a></li>
        </ul>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div> -->
        <!-- Header Topbar End -->
        <!-- Main Bar Start -->
        <div class="hd-sec">
            <div class="container">
                <div class="row">
                    <!-- Logo Start -->
                    <div class="col-md-3 col-sm-12 col-xs-8">
                        <div class="logo">
                            <a href="{{ url('index.html') }}" class="site-logo"><img
                                    src="{{ asset('/img/logo.png') }}" alt="" /></a>
                            <a href="{{ url('index.html') }}" class="sticky-logo"><img
                                    src="{{ asset('/img/logo.png') }}" alt="" /></a>
                        </div>
                    </div>
                    <!-- Logo End -->


                    <!-- Main Menu Start -->
                    <div class="mobile-nav-menu"></div>
                    <div class="col-md-9 col-sm-9 nav-menu">
                        <div class="menu">
                            <nav id="main-menu" class="main-menu">
                                <ul>
                                    <li class="active"><a href="{{ url('index.html') }}">Home</a></li>
                                    <li><a href="{{ url('#') }}">About Us</a></li>
                                    <li><a href="{{ url('#') }}">Products</a>
                                        <ul>
                                            <li><a href="{{ url('#') }}">HEAT TRANSFER LABELS </a></li>
                                            <li><a href="{{ url('#') }}">ALL KINDS OF GARMENTS LABEL </a></li>
                                            <li><a href="{{ url('#') }}">Hang Tag</a></li>
                                            <li><a href="{{ url('#') }}">OFFSET ITEMS </a></li>
                                        </ul>
                                    </li>

                                    <li><a href="{{ url('#') }}">Facilities</a></li>
                                    <!--<li><a href="{{ url('#') }}">Graphics Design</a></li> 						-->
                                    <li><a href="{{ url('#') }}">Photo Gallery</a></li>
                                    <li><a href="{{ url('#') }}">Certifications</a></li>

                                    <li><a href="{{ url('#') }}">Contact</a></li>


                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Main Menu End -->
                </div>
            </div>
        </div>
        <!-- Main Bar End -->
    </header>
    <!-- Header End -->

    <!-- Slider Section Start -->
    <div class="slider">
        <div class="all-slide owl-item">
            @foreach ($sliders as $slider)
                <!-- Slider Single Item Start -->
                <div class="single-slide" style="background-image:url('{{ $slider->image }}');">
                    <div class="slider-overlay"></div>
                    <div class="slider-wrapper">
                        <div class="slider-text">
                            <div class="slider-caption">
                                <h1>{{ $slider->caption }}</h1>
                                <ul>
                                    <li><a href="{{ url($slider->url) }}">learn more</a></li>
                                    <li><a href="{{ url('#') }}">contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Single Item End -->
            @endforeach
        </div>
    </div>
    <!-- Slider Section End -->


    <!-- <div class="about-us-sec pt-100 pb-100">
  <div class="container">
   <div class="row">
    <div class="col-md-6">
     <div class="about-img">
      <img src="img/about.jpg" alt=""/>
      <div class="company-exprience">
       <div class="company-exprience-inner">
        <div class="company-exprience-logo">
         <i class="icofont-award"></i>
        </div>
        <div class="company-exprience-text">
         <span class="foundend-year">1992</span>
         <span class="founded-title">Company Founded</span>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="col-md-6">
     <div class="about-desc">
      <div class="sec-title">
       <span class="sec-sub-title">Welcome to Carnival Offset Printers</span>
       <h1>  CARNIVAL OFFSET PRINTERS: The Most Innovative Professional Trims & Accessories Manufacturer</span></h1>
       <div class="border-shape"></div>
      </div>
      <p>Are you looking for the finest quality Apparel Trims and Accessories for your brand? If yes then you are in the right place!

Welcome to CARNIVAL OFFSET PRINTERS LTD. We thank you for taking your time to view our website and for showing interest in our Trims and Accessories Plant. CARNIVAL OFFSET PRINTERS Ltd. where you can find experts who really meets your demand according to your needs. We are the best manufacturer and supplier of trims & accessories and we have been in the industry since 2015.</p>
     <div  class="company-author">

     </div>
     </div>
    </div>

   </div>
  </div>
 </div> -->

    <div class="service-cat-sec pt-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="sec-title text-center">
                        <h1>WHAT WE ARE ABOUT</h1>
                        <p>CARNIVAL OFFSET PRINTERS is the Trims and Accessories Manufacturer in Bangladesh that is
                            defined by three things – innovative operational skills, expertise in professionalism and
                            advanced technology.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($abouts as $about)
                    <div class="col-md-4">
                        <div class="single-service-cat">
                            <div class="service-cat-img">
                                <img src="{{ asset($about->image) }}" alt="">
                                <a href="{{ url('#') }}" class="service-cat-btn">Read More</a>
                            </div>
                            <div class="service-cat-desc">
                                <span class="service-cat-icon"><i class="icofont-recycle-alt"></i></span>
                                <div class="service-cat-title">
                                    <h2><a href="{{ url($about->url) }}">{{$about->title}}</a></h2>
                                </div>
                                <p>{{$about->description}}</p>
                                <a href="{{ url('#') }}" class="service-cat-redmore">View Details <i
                                        class="icofont-thin-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- service Section End -->



    <div class="counter-v2-sec">
        <!-- <div class="counter-v2-sec-overlay"></div> -->
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6 inner">
                    <div class="counter-v2-up-inner">
                        <div class="countup-text">
                            <h2 class="counter">1,212</h2>
                            <h4>Shipment Delivered</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 inner">
                    <div class="counter-v2-up-inner">
                        <div class="countup-text">
                            <h2 class="counter">10</h2>
                            <h4>Qualified Executives</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 inner">
                    <div class="counter-v2-up-inner">
                        <div class="countup-text">
                            <h2 class="counter">60</h2>
                            <h4>Expert Workers</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 inner">
                    <div class="counter-v2-up-inner">
                        <div class="countup-text">
                            <h2 class="counter">35</h2>
                            <h4>Happy Buyers</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--project Section Start -->
    <div class="project-page-sec pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-6">
                    <div class="sec-title text-center">
                        <h1>OUR PRODUCT</h1>
                        <p>Our in-house team of designers are ready to work closely with clients</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single project Inner Start -->
                <div class="col-md-3 col-sm-6 inner">
                    <div class="single-project-inner">
                        <div class="project-thumb">
                            <img src="{{ asset('/img/products/1.jpg') }}" alt="" />
                            <div class="project-thumb-overlay">
                                <div class="project-icon">
                                    <a href="{{ url('#') }}"><i class="icofont-external-link"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-inner-desc">
                            <h2><a href="{{ url('#') }}">HEAT TRANSFER LABELS</a></h2>
                            <p>Heat Transfer Label is an excellent way of printing patterns on customized and
                                personalized commodities, and printing patterns that contain full-color photos or
                                images.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 inner">
                    <div class="single-project-inner">
                        <div class="project-thumb">
                            <img src="{{ asset('/img/products/24.png') }}" alt="" />
                            <div class="project-thumb-overlay">
                                <div class="project-icon">
                                    <a href="{{ url('#') }}"><i class="icofont-external-link"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-inner-desc">
                            <h2><a href="{{ url('#') }}">Reflective Heat Transfer Label</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 inner">
                    <div class="single-project-inner">
                        <div class="project-thumb">
                            <img src="{{ asset('/img/products/4.jpg') }}" alt="" />
                            <div class="project-thumb-overlay">
                                <div class="project-icon">
                                    <a href="{{ url('#') }}"><i class="icofont-external-link"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-inner-desc">
                            <h2><a href="{{ url('#') }}">Heat Transfer Highdency Label</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 inner">
                    <div class="single-project-inner">
                        <div class="project-thumb">
                            <img src="{{ asset('/img/products/2.jpg') }}" alt="" />
                            <div class="project-thumb-overlay">
                                <div class="project-icon">
                                    <a href="{{ url('#') }}"><i class="icofont-external-link"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-inner-desc">
                            <h2><a href="{{ url('#') }}">Garments Care Label</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 inner">
                    <div class="single-project-inner">
                        <div class="project-thumb">
                            <img src="{{ asset('/img/products/hang.png') }}" alt="" />
                            <div class="project-thumb-overlay">
                                <div class="project-icon">
                                    <a href="{{ url('#') }}"><i class="icofont-external-link"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-inner-desc">
                            <h2><a href="{{ url('#') }}">Hang Tags</a></h2>
                            <p>Hang tags are beneficial for the details that are important to a customer such as sizing,
                                pricing and brand. But they are so much more than that in today’s bustling retail
                                industry.</p>
                        </div>
                    </div>
                </div>




                <div class="col-md-3 col-sm-6 inner">
                    <div class="single-project-inner">
                        <div class="project-thumb">
                            <img src="{{ asset('/img/products/21.png') }}" alt="" />
                            <div class="project-thumb-overlay">
                                <div class="project-icon">
                                    <a href="{{ url('#') }}"><i class="icofont-external-link"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-inner-desc">
                            <h2><a href="{{ url('#') }}">Barcode & price sticker</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 inner">
                    <div class="single-project-inner">
                        <div class="project-thumb">
                            <img src="{{ asset('/img/products/22.png') }}" alt="" />
                            <div class="project-thumb-overlay">
                                <div class="project-icon">
                                    <a href="{{ url('#') }}"><i class="icofont-external-link"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-inner-desc">
                            <h2><a href="{{ url('#') }}">Silica Gel</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 inner">
                    <div class="single-project-inner">
                        <div class="project-thumb">
                            <img src="{{ asset('/img/products/23.png') }}" alt="" />
                            <div class="project-thumb-overlay">
                                <div class="project-icon">
                                    <a href="{{ url('#') }}"><i class="icofont-external-link"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-inner-desc">
                            <h2><a href="{{ url('#') }}">Graphics Design Solution</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
    <!-- Project Section End -->


    <!-- Testimonial Section Start -->
    <div class="testimonial-sec pt-100 pb-100">
        <div class="testimonial-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="all-testimonial">
                        <div class="single-testimonial">
                            <div class="client-comment">
                                <div class="client-thumb">
                                    <img src="{{ asset('/img/testimonial1.jpg') }}" alt="" />
                                </div>
                                <h2>Robert P. Anderson</h2>
                                <h3>Virtual Assistance</h3>
                                <p>Soluta mucius voluptatum sed te, maiorum ponderum sadipscing usu ad. Te volumus
                                    reprimique accommodare sit, eam consul impedit philosophia ex. Cu mea possim
                                    mandamus ocurreret, at choro inciderint mediocritatem mea. Eu cum nisl noluisse,</p>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="client-comment">
                                <div class="client-thumb">
                                    <img src="{{ asset('/img/testimonial2.jpg') }}" alt="" />
                                </div>
                                <h2>Rodney B. Hayes</h2>
                                <h3>Virtual Assistance</h3>
                                <p>Soluta mucius voluptatum sed te, maiorum ponderum sadipscing usu ad. Te volumus
                                    reprimique accommodare sit, eam consul impedit philosophia ex. Cu mea possim
                                    mandamus ocurreret, at choro inciderint mediocritatem mea. Eu cum nisl noluisse,</p>

                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="client-comment">
                                <div class="client-thumb">
                                    <img src="{{ asset('/img/testimonial3.jpg') }}" alt="" />
                                </div>
                                <h2>Clifford J. Engelmann</h2>
                                <h3>Company Assistance</h3>
                                <p>Soluta mucius voluptatum sed te, maiorum ponderum sadipscing usu ad. Te volumus
                                    reprimique accommodare sit, eam consul impedit philosophia ex. Cu mea possim
                                    mandamus ocurreret, at choro inciderint mediocritatem mea. Eu cum nisl noluisse,</p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Section End -->


    <!-- Footer Section Start -->
    <footer class="footer1">
        <!-- Footer Top Section Start -->
        <div class="footer-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 footer-widget-inner">
                        <div class="footer-wedget-one">
                            <a href="{{ url('index.html') }}"><img src="{{ asset('/img/logo.png') }}"
                                    alt="" /></a>
                            <p>Welcome to CARNIVAL OFFSET PRINTERS. We thank you for taking your time to view our
                                website and for showing interest in our Trims and Accessories Plant.
                                CARNIVAL OFFSET PRINTERS Ltd. where you can find experts who really meets your demand
                                according to your needs. We are the best manufacturer and supplier of
                                trims & accessories and we have been in the industry since 2005. </p>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="{{ url('#') }}"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="icofont-twitter"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="icofont-linkedin"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="icofont-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-widget-inner">
                        <div class="footer-widget-menu">
                            <h2>Useful Links</h2>
                            <ul>
                                <li><a href="{{ url('#') }}">about Us</a></li>
                                <li><a href="{{ url('#') }}">Contact Us</a></li>
                                <li><a href="{{ url('#') }}">Faciliteis</a></li>
                                <li><a href="{{ url('#') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-widget-inner">
                        <div class="footer-widget-menu">
                            <h2>Our services</h2>
                            <ul>
                                <li><a href="{{ url('#') }}">Market Research</a></li>
                                <li><a href="{{ url('#') }}">business planing</a></li>
                                <li><a href="{{ url('#') }}">advaced accounting</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom Section Start -->
            <div class="footer-bottom-sec">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <div class="copy-right">
                                <p>&copy; coyright 2024 All right reserve by, Carnival Offset Printers Ltd</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="copy-right text-right">
                                <p class="footer-copytext"> <a href="https://www.esoft.com.bd/" target="_blank"> Web
                                        Design Company :</a> <span style="font-family:cursive">e-<span
                                            style="color:red">S</span>oft</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom Section End -->
        </div>
        <!-- Footer Top Section End -->
    </footer>
    <!-- Footer Section End -->
    <!-- Scripts Js Start -->
    <script src="{{ asset('/js/jquery-2.2.4.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="{{ asset('/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/js/owl.animate.js') }}"></script>
    <script src="{{ asset('/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('/js/custom.js') }}"></script>
    <!-- Scripts Js End -->
</body>

<!-- https://themeearth.com/tf/html/fincox/ -->

</html>
