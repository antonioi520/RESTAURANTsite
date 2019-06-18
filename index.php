<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 6/17/2019
 * Time: 5:31 PM
 */
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mi Alma Restaurant</title>


    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/v4-shims.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="icon" href="img/logo.png" type="image/x-icon">


</head>
<body>
<!-- Header -->

<?php include("views/nav.html") ?>

<div class="headerwrapper">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="z-index: 1;margin-top:-100px;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/header2.jpg" class="d-block w-100" alt="..." style="height:800px;filter:brightness(60%);object-fit: cover">
                <h1 class="headertext">WELCOME TO MI ALMA<br> RESTAURANT</H1>
                <a href="#" id="box"><h2 id="headerHours">View Hours</h2></a>
                <ul class="headericons">
                    <li style="display: inline;padding:0.5em;"> <div id="test"><a href="https://www.facebook.com/Mi-Alma-1150016415172344/" target="_blank" class="circleborder"><i class="fab fa-facebook-f iconcolor"></i></a></div></li>
                    <li style="display: inline;"><div id="test"><a href="https://www.instagram.com/mialmacafe/?hl=en" target="_blank" class="circleborder"> <i class="fab fa-instagram iconcolor"></i></a></div></li>
                </ul>
            </div>

            <div class="carousel-item">
                <img src="img/Interior/interior2.jpg" class="d-block w-100" alt="..." style="height:800px;filter:brightness(60%);object-fit: cover">
                <h1 class="headertext">WELCOME TO MI ALMA<br> RESTAURANT</H1>
                <a href="#" id="box"><h2 id="headerHours">View Hours</h2></a>
                <ul class="headericons">
                    <li style="display: inline;padding:0.5em;"> <div id="test"><a href="https://www.facebook.com/Mi-Alma-1150016415172344/" target="_blank" class="circleborder"><i class="fab fa-facebook-f iconcolor"></i></a></div></li>
                    <li style="display: inline;"><div id="test"><a href="https://www.instagram.com/mialmacafe/?hl=en" target="_blank" class="circleborder"> <i class="fab fa-instagram iconcolor"></i></a></div></li>
                </ul>
            </div>

            <div class="carousel-item">
                <img src="img/Interior/interior.jpg" class="d-block w-100" alt="..." style="height:800px;filter:brightness(60%);object-fit: cover">
                <h1 class="headertext">WELCOME TO MI ALMA<br> RESTAURANT</H1>
                <a href="#" id="box"><h2 id="headerHours">View Hours</h2></a>
                <ul class="headericons">
                    <li style="display: inline;padding:0.5em;"> <div id="test"><a href="https://www.facebook.com/Mi-Alma-1150016415172344/" target="_blank" class="circleborder"><i class="fab fa-facebook-f iconcolor"></i></a></div></li>
                    <li style="display: inline;"><div id="test"><a href="https://www.instagram.com/mialmacafe/?hl=en" target="_blank" class="circleborder"> <i class="fab fa-instagram iconcolor"></i></a></div></li>
                </ul>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!--==========================
  About Section
  ============================-->
<section id="about">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">About us</h3>
                <div class="section-title-divider"></div>
<!--                <p class="section-description">We are a two man team from different backgrounds in programming coming together to deliver you top-notch websites and other business needs!</p>-->
            </div>
        </div>
    </div>
    <div class="container about-container wow fadeInUp">
        <div class="row">

            <div class="col-lg-6 about-img">
                <img src="img/Staff/staff.jpg" alt="">
            </div>

            <div class="col-md-6 about-content">
                <h2 class="about-title">We provide great food and services WIP</h2>
                <p class="about-text">
                    Mi Alma Cafe is a Latin fusion restaurant brought to Broad Street alongside the newly renovated Bomes Theatre. WIP
                </p>
                <p class="about-text">
                    Providing food, events, and concerts, we go out of our way to ensure you experience a fun, top quality stay! WIP
                </p>
                <h3 style="font-weight: bold;color: #333;">Find Us</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2974.4541081971906!2d-71.41585268432019!3d41.79697697846551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e44f893f923a5f%3A0x86f9ff49752031d1!2s1017+Broad+St%2C+Providence%2C+RI+02905!5e0!3m2!1sen!2sus!4v1560838747202!5m2!1sen!2sus" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>            </div>
        </div>
    </div>
</section>
<!--images in middle -->
<section>
    <div class="wrapper">
        <div class="row">
                <div class="col-lg-6">
                    <div style="margin: auto;width: 50%;position: absolute;z-index: 1;left:25%;top:10%; ">
                        <img src="img/imgheader.png">
                        <h1 style="color:white;font-weight: bolder;padding-top: 2%;margin-bottom: 0;">OUR INGREDIENTS</h1>
                        <strong style="color:white;letter-spacing: 0.05em;">We use only the finest of ingredients and prepare them so that they bring out the best in our food</strong><br><br><br>
                        <a href="#" id="ingredientBox"><h2 id="ingredientBoxText">View Menu</h2></a>
                    </div>
                    <img src="img/FoodDrink/4.jpg" alt="food" style="height:700px;width: 1000px;object-fit: cover;filter:brightness(30%);float:left;">
                </div>
                <div class="col-lg-6">
                    <div style="margin: auto;width: 50%;position: absolute;z-index: 1;left:25%;top:10%; ">
                        <img src="img/imgheader.png">
                        <h1 style="color:white;font-weight: bolder;padding-top: 2%;margin-bottom: 0;">OUR SERVICES</h1>
                        <strong style="color:white;letter-spacing: 0.05em;">Our staff consists of our top quality servers and chefs providing every utility to assure you enjoy your time</strong><br><br><br>
                        <a href="#" id="ingredientBox" style="width:240px;"><h2 id="ingredientBoxText">View Services</h2></a>
                    </div>
                    <img src="img/Staff/staff3.jpg" alt="" style="height:700px;width: 1000px;object-fit: cover;filter:brightness(30%);">
                </div>
        </div>
    </div>
</section>
<!--contact-->
<section id="contact">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Contact Us</h3>
                <div class="section-title-divider"></div>
                <p class="section-description">Feel free to reach out to us and we'll get right back to you.</p>
            </div>
        </div>

        <div class="row">


            <div class="col-md-5 col-md-push-2" style="padding-bottom: 10px;">
                <div class="form">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit">Disabled</button></div>
                    </form>
                </div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-4 col-md-push-2">
                <div class="info">

                    <div>
                        <i class="fas fa-phone"></i><h4 style="padding-left:40px;">Phone</h4>
                        <p>(401) 648-0715</p>
                    </div>
                    <div style="padding-top: 20px;">
                        <i class="far fa-calendar-alt"></i><h4 style="padding-left:40px;">Hours</h4>
                        <strong>Mon-Tue:</strong><p style="padding-left:0;"> Closed</p><br>
                        <strong>Wed-Thur+Sun:</strong><p style="padding-left:0;"> 12pm-10:30pm</p><br>
                        <strong>Fri-Sat:</strong><p style="padding-left:0;"> 12pm-11:30pm</p>
                    </div>
                    <div style="padding-top: 20px;">
                        <i class="fas fa-location-arrow"></i><h4 style="padding-left:40px;">Location</h4>
                        <p> 1017 Broad Street</p><br>
                        <p> Providence, RI 02905</p>
                    </div>



                </div>
            </div>

        </div>
    </div>
</section>
<?php include("views/footer.html")?>
<!-- #footer -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>


<!--<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/header2.jpg" class="d-block w-100" alt="..." style="height:800px;">
        </div>
        <div class="carousel-item">
            <img src="https://www.freecomputerwallpapers.net/wallpapers/honolulu_zoo_wallpaper-1920x1080.jpg" class="d-block w-100" alt="..." style="height:650px;">
        </div>
        <div class="carousel-item">
            <img src="https://localtvkfor.files.wordpress.com/2019/03/okc-zoo-giraffe-feeding.jpg?quality=85&strip=all&w=1920" class="d-block w-100" alt="..." style="height:650px;">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>-->