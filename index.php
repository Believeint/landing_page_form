<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <nav>
        <header class="main_menu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-dark">
                            <a class="navbar-brand main_logo menu-btn" href="index.php"> <img src="images/logo.png" alt="logo"> </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="menu_icon"></span>
                            </button>
    
                            <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#features">Features</a>
                                    </li>
                                
                                </ul>
                            </div>
                            <a href="#getebook" class="d-none d-sm-block btn_1 home_page_btn">Get Ebook</a>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    </nav>

    <?php
    
    if(isset($_REQUEST['success'])) {
    
    if($_REQUEST['success'] == 1) {
        echo "<div style='position:absolute; top:100px;right:0' class='alert alert-success' role='alert'>
                o link com o ebook foi enviado ao seu email.
              </div>";
    } else {
        echo "<div style='position:absolute; top:100px;right:0' class='alert alert-danger' role='alert'>
                Não foi possível enviar, tente novamente mais tarde.
              </div>";
    }
    }
    
    ?>
    

    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5">
                    <div class="banner_img d-none d-lg-block">
                        <img src="images/banner_img.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>Building Networks
                                For People</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="images/animate_icon/Ellipse_7.png" alt="" class="feature_icon_1 custom-animation1">
        <img src="images/animate_icon/Ellipse_8.png" alt="" class="feature_icon_2 custom-animation2">
        <img src="images/animate_icon/Ellipse_1.png" alt="" class="feature_icon_3 custom-animation3">
        <img src="images/animate_icon/Ellipse_2.png" alt="" class="feature_icon_4 custom-animation4">
        <img src="images/animate_icon/Ellipse_3.png" alt="" class="feature_icon_5 custom-animation5">
        <img src="images/animate_icon/Ellipse_4.png" alt="" class="feature_icon_6 custom-animation6">
    </section>

    <section id="features" class="use_sasu padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <img src="images/icon/feature_icon_1.png" alt="">
                            <h4>Fully Secured</h4>
                            <p>Made great fish shall beast, fourth land also Doesn
                                tree without lesser likeness he fruit of called gathering
                                day whose called were have </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <img src="images/icon/feature_icon_2.png" alt="">
                            <h4>Unique Design</h4>
                            <p>Made great fish shall beast, fourth land also Doesn tree
                                without lesser likeness he fruit of called gathering day whose
                                called were have </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <img src="images/icon/feature_icon_3.png" alt="">
                            <h4>A Volunteer</h4>
                            <p>Made great fish shall beast, fourth land also Doesn tree without
                                lesser likeness he fruit of called gathering day whose called were have </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="img/animate_icon/Ellipse_1.png" alt="" class="feature_icon_1 custom-animation1">
    </section>

    <section id="getebook" class="subscribe_part padding_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="subscribe_part_text text-center">
                        <h2>Experience the most simple way to <br>
                            manage business</h2>
                        <div class="subscribe_form">
                            <form method="post" action="getebook.php">
                                <div class="form-row">
                                    <div class="col-sm-9">
                                        <input type="email" name="email" class="form-control" placeholder="enter your email">
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="subscribe_btn">
                                            <div class="btn_2 d-block">Subscribe and get your free ebook</div>
                                            <button type="submit" class="btn btn-primary">Subscribe</button> 
                                        </div>
                                    </div>
                                </div>
                                                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="img/animate_icon/Ellipse_5.png" alt="" class="feature_icon_2 custom-animation2">
    </section>

    <footer class="footer_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-4 col-lg-4">
                    <div class="single_footer_part">
                        <a href="index.php" class="footer_logo_iner"> <img src="images/footer_logo.png" alt="#"> </a>
                        <p>Gathered. Under is whose you'll to make years is mat lights thing together fish made
                            forth thirds cattle behold won't. Fourth creeping first female.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2">
                    <div class="single_footer_part">
                        <h4>About Us</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Managed Website</a></li>
                            <li><a href="">Manage Reputation</a></li>
                            <li><a href="">Power Tools</a></li>
                            <li><a href="">Marketing Service</a></li>
                            <li><a href="">Customer Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Quick Links</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Store Hours</a></li>
                            <li><a href="">Brand Assets</a></li>
                            <li><a href="">Investor Relations</a></li>
                            <li><a href="">Terms of Service</a></li>
                            <li><a href="">Privacy & Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2">
                    <div class="single_footer_part">
                        <h4>My Account</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Press Inquiries</a></li>
                            <li><a href="">Media Directories</a></li>
                            <li><a href="">Investor Relations</a></li>
                            <li><a href="">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Resources</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Application Security</a></li>
                            <li><a href="">Software Policy</a></li>
                            <li><a href="">Supply Chain</a></li>
                            <li><a href="">Agencies Relation</a></li>
                            <li><a href="">Manage Reputation</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-8">
                    <div class="copyright_text">
                        <P>
                            Copyright &copy; 2020
                        </P>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer_icon social_icon">
                        <ul class="list-unstyled">
                            <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

   
    

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>