<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact Us</title>
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
<style>
    .contact-page ul{
list-style: none;
    }
    .contact-page ul li{
padding: 10px;
line-height: 30px;
    }
    .contact-page ul li a{
        color: #555;
    }
    .contact-page ul li img{
        height: 45px;
        padding-right: 10px;
    }
    @media (max-width: 576px){
.p-xs-0 {
    padding: 0 !important;
}
}
</style>
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
            include "navbar.php";
        ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 background-image" style="margin-bottom: 6rem; background: linear-gradient(rgba(6, 3, 21, .5), rgba(6, 3, 21, .5)), url(img/Contact-us.jpg) center center no-repeat;" id="page-contact">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown" style="text-shadow: 4px 5px 3px #000;">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                   
                    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid overflow-hidden  px-lg-0">
        <div class="container contact-page  px-lg-0">
            <div class="row g-5 mx-lg-0">
               
                <div class="col-md-6 contact-form wow fadeIn" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase" id="contact-in">Get In Touch</h6>
                    <h1 class="mb-4">Contact For Any Query</h1>
                     <div class="bg-light p-4">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="number" placeholder="Your Number">
                                        <label for="number">Your Number</label>
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6  wow fadeInRight" data-wow-delay="0.1s">
                    <div class="position-relative h-100">
                        <iframe class="position-absolute w-100 h-100" style="object-fit: cover;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54412.302970518!2d76.86760177182964!3d31.530505647207953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3905198fbcc897f1%3A0xce8c79e8a5c16439!2sSundar%20Nagar%2C%20Himachal%20Pradesh%20175019!5e0!3m2!1sen!2sin!4v1710583414848!5m2!1sen!2sin"
                        frameborder="0" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                        <iframe src="" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
               <div class="container px-5 p-xs-0">

                   <ul class="">
                       <li><img src="img/location.png" alt="">VPO Upper Behali, Tehsil Sunder Nagar, District Mandi, Himachal Pradesh - 175019</li>
                       <li><img src="img/email.png" alt=""><a href="mailto:apvisionhp@gmail.com">apvisionhp@gmail.com</a> </li>
                       <li><img src="img/phone-call.png" alt=""><a href="tel:9919218125">+91 9919218125</a> <a href="tel:9988108800">+91 9988108800</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


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