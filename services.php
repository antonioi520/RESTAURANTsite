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
    <meta name = "viewport" content = "width=device-width, initial-scale = 1, user-scalable = no"/>


    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">
    <link href="css/services.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/v4-shims.css">
    <link href="lib/animate-css/animate.min.css" rel="stylesheet">


</head>
<body>
<!-- Header -->


<?php include("views/nav_pages.html")?>
<BR>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="top:-25px;">
    <div class="carousel-inner">
        <!--        <div class="carousel-item active">-->
        <!--            <img class="d-block w-100" src="img/FoodDrink/5.jpg" alt="First slide" style="height:600px;filter:brightness(70%);object-fit: cover">-->
        <!--        </div>-->
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/TheaterInterior/concert-37.jpg" alt="Second slide" style="height:600px;filter:brightness(50%);object-fit: cover">
            <div class="carousel-caption d-md-block d-flex justify-content-center"  id="hero">

                <center>
                    <div class="serviceHeaderBox">
                        <h1 class="serviceHeaderText">Services</h1>
                    </div>
                </center>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/Interior/MiAlmaCafeOpeningCeremony-12.jpg" alt="Third slide" style="height:600px;filter:brightness(50%);object-fit: cover">
            <div class="carousel-caption d-md-block d-flex justify-content-center "  id="hero">

                <center>
                    <div class="serviceHeaderBox">
                        <h1 class="serviceHeaderText">Services</h1>
                    </div>
                </center>
            </div>
        </div>
    </div>
    <div class="arrowRemove">
        <a class="carousel-control-prev .d-none .d-md-block" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon .d-none .d-md-block" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="container">
<center>
    <img src="img/logo.png" style="height:200px;width:300px;object-fit: contain;">
</center>

<hr style="margin-bottom:0px;">
</div>
<section id="about">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h1 class="" style="font-family: 'Satisfy', cursive;letter-spacing: 0.05em;font-size: 70px;color:black;margin-bottom: 10px;">Highlights</h1>
                <center>
                <div class="section-title-divider"></div>
                <!--                <p class="section-description">We are a two man team from different backgrounds in programming coming together to deliver you top-notch websites and other business needs!</p>-->
            </div>
        </div>
    </div>
    <div class="container about-container wow fadeInUp">
        <div class="row">
            <div class="col-lg-6 about-img">
                <img src="img/Staff/MiAlmaCafeOpeningCeremony-8.jpg" alt="" style="height:auto;object-fit: cover;" id="aboutImg">
            </div>

            <div class="col-md-6 about-content">

                <h2 class="about-title" style="margin-bottom: 10px;">Chef's Recommendations</h2>
                <p class="about-text" style="padding-left:2px;">
                    Be sure to ask your server about the chef's recommendation for the day!
                </p>

                <br>

                <h2 class="about-title" style="margin-bottom: 10px;">Weekly Specials</h2>
                <p class="about-text" style="padding-left:2px;">
                    Don't forget to ask staff about the weekly special next time you dine with us!
                </p>

                <br>

                <h2 class="about-title" style="margin-bottom: 10px;">À La Carte</h2>
                <p class="about-text" style="padding-left:2px;">
                    Come in and order your food à la carte.
                </p>

                <br>

                <h2 class="about-title" style="margin-bottom: 10px;">Take Out</h2>
                <p class="about-text" style="padding-left:3px;">
                    Give us a call at (401) 648-0715 and we'll prepare your order ahead of time for you! When it's ready,
                    pick it up on location at 1017 Broad Street Providence, RI 02905.
                </p>

                <a href="menu" id="menuBox"><h2 id="menuBoxText">View Menu</h2></a>

            </div>
        </div>
    </div>
</section>

<!--<section id="middleImages">
    <div class="wrapper">
        <div class="row" style="overflow: hidden;">
            <div class="col-lg-6">
                <div style="margin: auto;width: 50%;position: absolute;z-index: 1;left:25%;top:30%;">
                    <img src="img/imgheader3.png" style="object-fit: contain;">
                    <h1 style="color:white;font-weight: bolder;padding-top: 2%;margin-bottom: 0; text-align: center;">CATERING AT THE BOMES THEATER</h1>
                    <strong style="color:white;letter-spacing: 0.05em;"></strong><br><br><br>
                </div>
                <img class="testy" src="img/TheaterInterior/concert-41.jpg" alt="food" style="height:43.750em;width: 62.500em;object-fit: cover;filter:brightness(30%);float:left;">
            </div>
            <div class="col-lg-6">
                <div style="margin: auto;width: 50%;position: absolute;z-index: 1;left:25%;top:30%;">
                    <img src="img/imgheader3.png">
                    <h1 style="color:white;font-weight: bolder;padding-top: 2%;margin-bottom: 0; text-align: center;">CATERING FOR PERSONAL EVENTS</h1>
                    <strong style="color:white;letter-spacing: 0.05em;"></strong><br><br><br>
                </div>
                <img class="testy" src="img/FoodDrink/MiAlmaCafe-23.jpg" alt="" style="height:43.750em;width: 62.500em;object-fit: cover;filter:brightness(30%);">
            </div>
        </div>
    </div>
</section>-->
<!--==========================
  Subscrbe Section
  ============================-->
<section id="subscribe">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <img src="img/imgheader3.png" style="text-align: center;display: block;margin:auto;">
            </div>
        </div>
    </div>
</section>

<section id="about">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h1 class="" style="font-family: 'Satisfy', cursive;letter-spacing: 0.05em;font-size: 70px;color:black;margin-bottom: 10px;">Catering</h1>
                    <center>
                <div class="section-title-divider"></div>
                <!--                <p class="section-description">We are a two man team from different backgrounds in programming coming together to deliver you top-notch websites and other business needs!</p>-->
            </div>
        </div>
    </div>
    <div class="container about-container wow fadeInUp">
        <div class="row">
            <div class="col-lg-6 about-img">
                <img src="img/FoodDrink/MiAlmaCafe-2.jpg" alt="" style="width:520px; height: 330px; object-fit: cover;" id="aboutImg">
            </div>

            <div class="col-md-6 about-content">

                <h2 class="about-title">Catering at the Bomes Theater</h2>
                <p class="about-text">
                    At Mi Alma Restaurant, we provide an array of catering services for our customers.
                    If you are looking to host an event at the Bomes Theater, we can also
                    cater for your event there!
                </p>

                <br>

                <h2 class="about-title">Catering for personal events</h2>
                <p class="about-text">
                    Our catering services are not limited to just events hosted on location at the Bomes Theater, we also
                    cater for various other events including weddings, banquets, family gatherings and parties.
                </p>

                <br>

            </div>
        </div>
    </div>
</section>

<br>
<?php include("views/footer.html")?>

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