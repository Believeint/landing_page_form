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
                            <a class="navbar-brand main_logo menu-btn" href="index.html"> <img src="images/logo.png" alt="logo"> </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="menu_icon"></span>
                            </button>
    
                            <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html">Home</a>
                                    </li>
                                
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    </nav>

    
   

    <section id="getebook" class="subscribe_part padding_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="subscribe_part_text text-center">
                        <h2 style="color: #ff4800;">Here is your ebook</h2>
                        <div class="subscribe_form">

                         <?php

                            $f = "lorem-ipsum.pdf";
                            $file = ("ebook/$f");

                            $filetype = filetype($file);

                            $filename = basename($file);

                            header("Content-Type: " . $filetype);
                            header("Content-Lenght: " . filesize($file));
                            header("Content-Disposition: attachment; filename=".$filename);

                            readfile($file);

                         ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="img/animate_icon/Ellipse_5.png" alt="" class="feature_icon_2 custom-animation2">
    </section>

    <footer class="footer_part">
        <div class="container">
        
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