<!-- ?php
    include_once 'includes/contactform.php';
? -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Maxim - Contact Us </title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fontawesome CSS -->
    <link href="css/all.css" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper-main">
        <!-- Top Bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="social-media">
                            <ul>
                                <li><a href="https://www.facebook.com/Maxim-Nyansa-It-Solutions-788659301208789/timeline/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/MaximNyansa"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCTYJus0hr3iI9wvxqzHle"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/maxim-nyansa-it-solutions"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://www.instagram.com/maxim_nyansa/"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-details">
                            <ul>
                                <li><i class="fas fa-phone fa-rotate-90"></i> +233 209 057 157</li>
                                <li><i class="fas fa-map-marker-alt"></i> Maxim Nyansa IT Solutions, CORAL AVENUE – TANTRA HILLS, ACCRA.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-light top-nav">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="images/logo2.jpg" alt="logo" />
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Portfolio.php">My Port-Folio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Specialization Track <i class="fas fa-sort-down"></i></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                                <a class="dropdown-item" href="soft.php">Software Engineering</a>
                                <a class="dropdown-item" href="data.php">Data Science</a>
                                <a class="dropdown-item" href="agile.php"> Agile SCRUM Practices</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- full Title -->
        <div class="full-title">
            <div class="container">
                <!-- Page Heading/Breadcrumbs -->
                <h1 class="mt-4 mb-3"> Contact Us</h1>
                <div class="breadcrumb-main">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="breadcrumb-item active"> Contact Us</li>
                    </ol>
                </div>
            </div>
        </div>


        <div class="contact-main">
            <div class="container">
                <!-- Content Row -->
                <div class="row">
                    <!-- Map Column -->
                    <div class="col-lg-8 mb-4 contact-left">
                        <h3>Send us a Message</h3>
                        <form action="includes/datainput.php" method="POST">
                            <div class="control-group form-group">
                                <div class="controls">
                                    <input type="text" placeholder="Full Name" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <input type="tel" placeholder="Phone Number" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <input type="email" placeholder="Email Address" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <textarea rows="5" cols="100" placeholder="Message" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                                </div>
                            </div>
                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
                        </form>
                    </div>

                   

                    <!-- Contact Details Column -->
                    <div class="col-lg-4 mb-4 contact-right">
                        <h3>Contact Details</h3>
                        <p>
                            Coral Avenue
                            <br>Accra, Ghana
                            <br>
                        </p>
                        <p>
                            <abbr title="Phone">P</abbr>: +233 209 057 157
                        </p>
                        <p>
                            <abbr title="Email">E</abbr>:
                            <a href="maximnyansa@gmail.com"> maximnyansa@gmail.com </a>
                        </p>
                        <p>
                            <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
                        </p>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>

                    
        <div class="map-main">
            <!-- Embedded Google Map -->
            <iframe width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
        </div>






        <!-- Contact Us -->
        <div class="touch-line">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <p>For more information about the Maxim Nyansa Foundation, Exin certification and all related activities, please do not hesitate to contact us.</p>
                    </div>

                </div>
            </div>
        </div>


        <!--footer starts from here-->
        <footer class="footer">
            <div class="container bottom_border">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col">
                        <h5 class="headin5_amrc col_white_amrc pt2">About Us</h5>
                        <!--headin5_amrc-->
                        <p class="mb10">Maxim Nyansa stands for the best of two worlds. We have the strength of an NGO and we are a foundation raising funds and mobilizing volunteers to train underprivileged young Africans. </p>
                        <ul class="footer-social">
                            <li><a class="facebook hb-xs-margin" href="https://www.facebook.com/Maxim-Nyansa-It-Solutions-788659301208789/timeline/"><span class="hb hb-xs spin hb-facebook"><i class="fab fa-facebook-f"></i></span></a></li>
                            <li><a class="twitter hb-xs-margin" href="https://twitter.com/MaximNyansa"><span class="hb hb-xs spin hb-twitter"><i class="fab fa-twitter"></i></span></a></li>
                            <li><a class="instagram hb-xs-margin" href="https://www.instagram.com/maxim_nyansa/"><span class="hb hb-xs spin hb-instagram"><i class="fab fa-instagram"></i></span></a></li>

                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                        <!--headin5_amrc-->
                        <ul class="footer_ul_amrc">
                            <li><a href="about.php"><i class="fas fa-long-arrow-alt-right"></i>About Us</a></li>
                            <li><a href="contact.php"><i class="fas fa-long-arrow-alt-right"></i>Contact Us</a></li>
                            <li><a href="soft.php"><i class="fas fa-long-arrow-alt-right"></i>Software Engineering </a></li>
                            <li><a href="data.php"><i class="fas fa-long-arrow-alt-right"></i>Data Science</a></li>

                        </ul>
                        <!--footer_ul_amrc ends here-->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col">
                        <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
                        <!--headin5_amrc ends here-->
                        <ul class="footer_ul2_amrc">
                            <li>
                                <a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
                                <p>Twitter....<a href="https://twitter.com/MaximNyansa">https://twitter.com/MaximNyansa</a></p>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-facebook-f fleft padding-right"></i> </a>
                                <p>Facebook...<a href="https://www.facebook.com/maximnyansa/">https://www.facebook.com/maximnyansa/</a></p>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram fleft padding-right"></i> </a>
                                <p>Instagram...<a href="https://www.instagram.com/maxim_nyansa/">https://www.instagram.com/maxim_nyansa/</a></p>
                            </li>
                        </ul>
                        <!--footer_ul2_amrc ends here-->
                    </div>

                </div>
            </div>
            <div class="container">
                <p class="copyright text-center">All Rights Reserved. &copy; 2020 <a href="https://maximnyansa.com">Maxim</a> Design By :
                    <a href="https://maximnyansa.com">Michael Jobie Musa</a>
                </p>
            </div>
        </footer>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/filter.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>