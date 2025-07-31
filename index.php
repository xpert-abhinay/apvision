<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>APVISION CONSULTANCY SERVICE PRIVATE LIMITED</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/android-chrome-192x192.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <?php
        include 'navbar.php';
    ?>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 ">
        <div class="owl-carousel header-carousel position-relative mb-5">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/manpower.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
             
                                <h1 class="display-3 text-white animated slideInDown mb-4">Manpower  <span class="text-primary">Supply</span> </h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">we specialize in providing skilled manpower solutions tailored to meet your specific needs.</p>
                                <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a> -->
                                <a href="manpower-supply.php" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/banner2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">

                                <h1 class="display-3 text-white animated slideInDown mb-4"> Solar <span class="text-primary">Energy</span>  Projects</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Powering Tomorrow, Today: Illuminate Your Future with Solar Energy Solutions.</p>
                                <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a> -->
                                <a href="solar-energy.php" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/banner3.png" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">

                                <h1 class="display-3 text-white animated slideInDown mb-4"> Engineering &  <span class="text-primary">Construction</span> </h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2"> we believe in a collaborative approach to project delivery, working closely with clients, architects, subcontractors.</p>
                                <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a> -->
                                <a href="engineering-construction.php" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid overflow-hidden  px-lg-0">
        <div class="container about  px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="order-1 order-md-0  order-lg-0 col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100 px-3">
                        <img class="position-absolute img-fluid w-100 rounded-3" src="img/about.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="order-0 order-md-1 order-lg-0 col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <!-- <h6 class="text-secondary text-uppercase mb-3">About Us</h6> -->
                    <h1 class="mb-5">Apvision Consultancy Service Private Limited </h1>
                    <p class="mb-5">Welcome to Apvision Consultancy Service Private Limited, your trusted partner in manpower supply, solar energy projects, and engineering & construction solutions. With our expertise and dedication, we empower your projects to reach new heights of success. Let's build a sustainable future together.</p>
                    
                    <a href="about.php" class="btn btn-primary py-3 px-4  border rounded-3" >Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Fact Start -->
    <!-- <div class="container-xxl py-5 facts">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Some Facts</h6>
                    <h1 class="mb-5">#1 Place To Manage All Of Your Shipments</h1>
                    <p class="mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                        <div class="ps-4">
                            <h6>Call for any query!</h6>
                            <h3 class="text-primary m-0">+012 345 6789</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6">
                            <div class="bg-primary p-4 mb-4 wow fadeIn" data-wow-delay="0.3s">
                                <i class="fa fa-users fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                                <p class="text-white mb-0">Happy Clients</p>
                            </div>
                            <div class="bg-secondary p-4 wow fadeIn" data-wow-delay="0.5s">
                                <i class="fa fa-ship fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                                <p class="text-white mb-0">Complete Shipments</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="bg-success p-4 wow fadeIn" data-wow-delay="0.7s">
                                <i class="fa fa-star fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                                <p class="text-white mb-0">Customer Reviews</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Fact End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Our Work</h6>
                <h1 class="mb-5">Explore Our Work</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service1.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Manpower Supply</h4>
                        <p>We specialize in providing skilled manpower solutions tailored to meet your specific needs. </p>
                        <a class="btn-slide mt-2" href="manpower-supply.php"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service2.webp" alt="">
                        </div>
                        <h4 class="mb-3">Solar Energy Projects</h4>
                        <p> Our expertise in solar energy projects ensures sustainable solutions that harness the sun's potential for a brighter, cleaner future.</p>
                        <a class="btn-slide mt-2" href="solar-energy.php"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service3.jpg" alt="">
                        </div>
                        <h4 class="mb-3"> Engineering & Construction</h4>
                        <p>At Apvision Consultancy, we're the cornerstone of engineering and construction excellence.</p>
                        <a class="btn-slide mt-2" href="engineering-construction.php"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Service End -->
    <div class="container">


        <div class="row clearfix">
            <div class="section-title center">
                <h2 class="text-center">HOW DO WE WORK <br>
                </h2>
                <hr>
                <div class="mid"></div>

            </div>
            <div class="row py-5">


                <!--Default Icon Column-->
                <div class="default-icon-column col-lg-3 col-sm-6  col-xs-12">
                    <article class="inner-box">
                        <div class="icon-box">
                            <div class="ico"><img src="img/understand.png"></div>
                        </div>
                        <h3 class="text-center">Understand</h3>
                    </article>
                </div>

                <!--Default Icon Column-->
                <div class="default-icon-column col-lg-3 col-sm-6 col-xs-12">
                    <article class="inner-box">
                        <div class="icon-box">
                            <div class="ico"> <img src="img/plan.png"></div>
                        </div>
                        <h3 class="text-center">Plan</h3>
                    </article>
                </div>

                <!--Default Icon Column-->
                <div class="default-icon-column col-lg-3 col-sm-6 col-xs-12">
                    <article class="inner-box">
                        <div class="icon-box">
                            <div class="ico"> <img src="img/assign.png"></div>
                        </div>
                        <h3 class="text-center">Assign</h3>
                    </article>
                </div>

                <!--Default Icon Column-->
                <div class="default-icon-column col-lg-3 col-sm-6 col-xs-12">
                    <article class="inner-box">
                        <div class="icon-box">
                            <div class="ico"><img src="img/execute.png"></div>
                        </div>
                        <h3 class="text-center"> Execute</h3>
                    </article>
                </div>
            </div>

            <!--Default Icon Column-->


            <!--Default Icon Column-->

        </div>
    </div>

    <!-- Feature Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container feature py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Our Features</h6>
                    <h1 class="mb-5">We Are Trusted Apvision Consultancy Service Private Limited</h1>
                    <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">
                        <i class=" flex-shrink-0">

                            <img src="img/workers.png" alt="">
                        </i>
                        <div class="ms-4">
                            <h5>Tailored Manpower Solutions</h5>
                            <p class="mb-0">Customized staffing plans to meet specific project requirements.
                                Access to a diverse pool of skilled professionals across various industries.
                                Flexible staffing options to adapt to changing project needs</p>
                        </div>
                    </div>
                    <div class="d-flex mb-5 wow fadeIn" data-wow-delay="0.5s">
                        <i class=" fa-3x flex-shrink-0">
                            <img src="img/system.png" alt="">
                        </i>
                        <div class="ms-4">
                            <h5>Innovative Solar Energy Solutions</h5>
                            <p class="mb-0">Cutting-edge solar technologies for efficient energy generation.
                                End-to-end solutions from design and installation to maintenance and monitoring.
                                Sustainable and cost-effective alternatives to traditional energy sources.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-0 wow fadeInUp" data-wow-delay="0.7s">
                        <i class=" fa-3x flex-shrink-0">
                            <img src="img/construction-site.png" alt="">
                        </i>
                        <div class="ms-4">
                            <h5>Expert Engineering and Construction Services</h5>
                            <p class="mb-0">Comprehensive engineering expertise for complex projects.
                                Proven track record in delivering high-quality construction projects on time and within budget.
                                Innovative solutions that prioritize safety, efficiency, and sustainability.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6  wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100 d-flex align-items-center">
                        <img class="position-absolute img-fluid " src="img/features.png" style="object-fit: cover;" alt="" id="object-fit">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Pricing Start -->
    
    <!-- Pricing End -->


    <!-- Quote Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Get A Quote</h6>
                    <h1 class="mb-5">Request A Free Qoute!</h1>
                    <!--<p class="mb-5"> It implies that the company is willing to provide pricing information at no charge to the customer, allowing them to compare prices or budget accordingly before committing to a purchase.</p>-->
                    <div class="d-flex align-items-center">
                        <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                        <div class="ps-4">
                            <h6>Call for any query!</h6>
                            <h3 class="text-primary m-0">+91 9919218125</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="bg-light text-center p-5 wow fadeIn" data-wow-delay="0.5s">
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Mobile" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;" required>
                                        <option selected>Select Services</option>
                                        <option value="manpower-supply">Manpower Supply</option>
                                        <option value="solor-energy">Solar Energy</option>
                                        <option value="engineering-construction">Engineering and Construction </option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="message.."></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3 text-center" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->


    <!-- Team Start -->
   
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl  wow fadeInUp" data-wow-delay="0.1s">
        <div class="container pt-5">
            <div class="text-center">
                <h6 class="text-secondary text-uppercase">Testimonial</h6>
                <h1 class="mb-0">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <!-- <img class="img-fluid flex-shrink-0" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;"> -->
                        <div class="ms-4">
                            <h5 class="mb-1">Ajeet Singh</h5>
                            <p class="m-0">Engineering Firm</p>
                        </div>
                    </div>
                    <p class="mb-0">"Apvision Consultancy Service Private Limited exceeded our expectations with their impeccable engineering and construction services. Their attention to detail and commitment to quality ensured the successful completion of our project on time and within budget. We highly recommend their expertise to anyone seeking reliable and innovative solutions."</p>
                </div>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <!-- <img class="img-fluid flex-shrink-0" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;"> -->
                        <div class="ms-4">
                            <h5 class="mb-1">Ranjeet Kumar</h5>
                            <p class="m-0">Renewable Energy Company</p>
                        </div>
                    </div>
                    <p class="mb-0">"We are thrilled with the solar energy solutions provided by Apvision Consultancy Service Private Limited. Their team demonstrated exceptional professionalism and expertise throughout the project, delivering sustainable and cost-effective solutions that exceeded our expectations. It's been a pleasure working with them, and we look forward to future collaborations."</p>
                </div>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <!-- <img class="img-fluid flex-shrink-0" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;"> -->
                        <div class="ms-4">
                            <h5 class="mb-1">Gaurav Kumar </h5>
                            <p class="m-0">Manufacturing Company</p>
                        </div>
                    </div>
                    <p class="mb-0">"Apvision Consultancy Service Private Limited has been instrumental in streamlining our logistics operations. Their comprehensive services have significantly improved efficiency and productivity, allowing us to focus on our core business activities. We appreciate their dedication and commitment to delivering exceptional results."</p>
                </div>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <!-- <img class="img-fluid flex-shrink-0" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;"> -->
                        <div class="ms-4">
                            <h5 class="mb-1">Ankit Patel</h5>
                            <p class="m-0"> Construction Company</p>
                        </div>
                    </div>
                    <p class="mb-0"> "We partnered with Apvision Consultancy Service Private Limited for our manpower supply needs, and they delivered outstanding service from start to finish. Their team provided skilled and reliable workers who contributed to the success of our project. We are impressed with their professionalism and would gladly work with them again."</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <?php
        include 'footer.php';
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>