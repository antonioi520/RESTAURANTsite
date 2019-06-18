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



</head>
<body>
<!-- Header -->

<?php include("views/nav.html") ?>

<div class="headerwrapper">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="z-index: 1;margin-top:-100px;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/header2.jpg" class="d-block w-100" alt="..." style="height:800px;filter:brightness(20%);">
                <h1 class="headertext">WELCOME TO MI ALMA<br> RESTAURANT</H1>
                <a href="#" id="box"><h2 id="headerHours">View Hours</h2></a>
                <ul class="headericons">
                    <li style="display: inline;padding:0.5em;"> <div id="test"><a href="https://www.facebook.com/Mi-Alma-1150016415172344/" target="_blank" class="circleborder"><i class="fab fa-facebook-f iconcolor"></i></a></div></li>
                    <li style="display: inline;"><div id="test"><a href="https://www.instagram.com/mialmacafe/?hl=en" target="_blank" class="circleborder"> <i class="fab fa-instagram iconcolor"></i></a></div></li>
                </ul>
            </div>

            <div class="carousel-item">
                <img src="img/Interior/interior2.jpg" class="d-block w-100" alt="..." style="height:800px;filter:brightness(20%);">
                <h1 class="headertext">WELCOME TO MI ALMA<br> RESTAURANT</H1>
                <a href="#" id="box"><h2 id="headerHours">View Hours</h2></a>
                <ul class="headericons">
                    <li style="display: inline;padding:0.5em;"> <div id="test"><a href="https://www.facebook.com/Mi-Alma-1150016415172344/" target="_blank" class="circleborder"><i class="fab fa-facebook-f iconcolor"></i></a></div></li>
                    <li style="display: inline;"><div id="test"><a href="https://www.instagram.com/mialmacafe/?hl=en" target="_blank" class="circleborder"> <i class="fab fa-instagram iconcolor"></i></a></div></li>
                </ul>
            </div>

            <div class="carousel-item">
                <img src="img/Interior/interior.jpg" class="d-block w-100" alt="..." style="height:800px;filter:brightness(20%);">
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
<div class="container">

</div>
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
                        <strong>Fri-Sat:</strong><p style="padding-left:0;"> 12-11:30pm</p>
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