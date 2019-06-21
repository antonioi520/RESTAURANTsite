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
    <link href="css/gallery.css" rel="stylesheet">
<!--    <link href="css/menu.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/v4-shims.css">



</head>
<body>
<!-- Header -->


<?php include("views/nav_pages.html")?>
<br>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="top:-25px;">
    <div class="carousel-inner">
        <!--        <div class="carousel-item active">-->
        <!--            <img class="d-block w-100" src="img/FoodDrink/5.jpg" alt="First slide" style="height:600px;filter:brightness(70%);object-fit: cover">-->
        <!--        </div>-->
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/Interior/MiAlmaCafeOpeningCeremony-13.jpg" alt="Second slide" style="height:600px;filter:brightness(70%);object-fit: cover">
            <div class="carousel-caption d-none d-md-block">
               <!-- <center>
                    <img src="img/logo.png" class="galleryHeaderImage">
                </center>-->
                <center>
                    <div class="galleryHeaderBox">
                        <h1 class="menu-heading galleryHeaderText">Gallery</h1>
                    </div>
                </center>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/Interior/MiAlmaCafeOpeningCeremony-23.jpg" alt="Third slide" style="height:600px;filter:brightness(70%);object-fit: cover">
            <div class="carousel-caption d-none d-md-block">

            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/Interior/MiAlmaCafeOpeningCeremony-27.jpg" alt="Third slide" style="height:600px;filter:brightness(70%);object-fit: cover">
            <div class="carousel-caption d-none d-md-block">

            </div>
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




<div class="container">
<!--    <h1 class="menu-heading">Gallery</h1>-->
    <center>
        <img src="img/logo.png" style="height:200px;width:300px;object-fit: contain;">
    </center>
    <br>
    <hr>
    <h2 style="text-align:center; color:black;padding-bottom:5px;">Food & Drinks</h2>
    <div class="section-title-divider" style="margin-bottom:-10px;"></div>
    <br>
    <div class="gallery-border">
        <div class="row">
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-1.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(1)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-2.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(2)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-3.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(3)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-4.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(4)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-5.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(5)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-6.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(6)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-7.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(7)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-8.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(8)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-9.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(9)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-10.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(10)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-11.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(11)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-12.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(12)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-13.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(13)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-14.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(14)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-15.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(15)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-16.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(16)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-17.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(17)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-18.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(18)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-19.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(19)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-20.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(20)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-21.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(21)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-22.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(22)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-23.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(23)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-24.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(24)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-25.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(25)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-26.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(26)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-27.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(27)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-28.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(28)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-29.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(29)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-30.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(30)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-31.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(31)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-32.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(32)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-33.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(33)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-34.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(34)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-35.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(35)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-36.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(36)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-37.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(37)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-38.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(38)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-39.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(39)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-40.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(40)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-41.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(41)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-42.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(42)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-43.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(43)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-44.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(44)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-45.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(45)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-46.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(46)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-47.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(47)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-48.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(48)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-49.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(49)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-50.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(50)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-51.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(51)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-52.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(52)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-53.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(53)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-54.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(54)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-55.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(55)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-56.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(56)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-57.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(57)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-58.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(58)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-59.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(59)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-60.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(60)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-61.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(61)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-62.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(62)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-63.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(63)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-64.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(64)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-65.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(65)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-66.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(66)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-67.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(67)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-68.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(68)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-69.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(69)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/FoodThumbs/MiAlmaCafe-70.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(70)" class="hover-shadow cursor">
            </div>
        </div>
    </div>

    <br>

    <h2 style="text-align:center; color:black;padding-bottom:5px;">Interior (Cafe)</h2>
    <div class="section-title-divider" style="margin-bottom:-10px;"></div>
    <br>
    <div class="gallery-border">
        <div class="row">
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-5.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(1)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-6.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(2)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-9.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(3)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-10.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(4)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-11.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(5)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-12.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(6)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-13.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(7)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-14.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(8)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-15.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(9)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-16.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(10)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-17.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(11)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-19.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(12)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-20.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(13)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-21.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(14)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-22.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(15)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-23.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(16)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-24.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(17)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-26.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(18)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-27.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(19)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/InteriorThumbs/MiAlmaCafeOpeningCeremony-29.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(20)" class="hover-shadow cursor">
            </div>
        </div>
    </div>

    <br>

    <h2 style="text-align:center; color:black;padding-bottom:5px;">Interior (Theater)</h2>
    <div class="section-title-divider" style="margin-bottom:-10px;"></div>
    <br>
    <div class="gallery-border">
        <div class="row">
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/Concert-2.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(1)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/Concert-7.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(2)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/Concert-9.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(3)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/concert-37.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(4)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/concert-38.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(5)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/concert-39.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(6)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/concert-41.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(7)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/concert-42.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(8)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/concert-43.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(9)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/concert-44.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(10)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/concert-45.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(11)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/concert-46.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(12)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/TheaterThumbs/DSC_0895.jpg" style="width:100%" onclick="openInteriorTModal();currentInteriorTSlide(13)" class="hover-shadow cursor">
            </div>
        </div>
    </div>

    <br>

    <h2 style="text-align:center; color:black;padding-bottom:5px;">Staff</h2>
    <div class="section-title-divider" style="margin-bottom:-10px;"></div>
    <br>
    <div class="gallery-border">
        <div class="row">
            <div class="column">
                <img id="galleryImg" src="img/StaffThumbs/staff.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(1)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/StaffThumbs/staff3.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(2)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/StaffThumbs/MiAlmaCafeOpeningCeremony-8.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(3)" class="hover-shadow cursor">
            </div>
        </div>
    </div>

    <br>
    <h2 style="text-align:center; color:black;padding-bottom:5px;">Menu</h2>
    <div class="section-title-divider" style="margin-bottom:-10px;"></div>
    <br>
    <div class="gallery-border">
        <div class="row">
            <div class="column">
                <img id="galleryImg" src="img/MenuThumbs/mi_alma_menu-01.jpg" style="width:100%" onclick="openMenuModal();currentMenuSlide(1)" class="hover-shadow cursor">
            </div>
            <div class="column">
                <img id="galleryImg" src="img/MenuThumbs/mi_alma_menu-02.jpg" style="width:100%" onclick="openMenuModal();currentMenuSlide(2)" class="hover-shadow cursor">
            </div>
        </div>
    </div>

    <div id="foodModal" class="modal">
        <span class="close cursor" onclick="closeFoodModal()">&times;</span>
        <div class="modal-content">

            <div class="foodSlides">
                <div class="numbertext">1 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-1.jpg" style="width:100%">
            </div>

            <div class="foodSlides">
                <div class="numbertext">2 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-2.jpg" style="width:100%">
            </div>

            <div class="foodSlides">
                <div class="numbertext">3 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-3.jpg" style="width:100%">
            </div>

            <div class="foodSlides">
                <div class="numbertext">4 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-4.jpg" style="width:100%">
            </div>

            <div class="foodSlides">
                <div class="numbertext">5 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-5.jpg" style="width:100%">
            </div>

            <div class="foodSlides">
                <div class="numbertext">6 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-6.jpg" style="width:100%">
            </div>

            <div class="foodSlides">
                <div class="numbertext">7 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-7.jpg" style="width:100%">
            </div>

            <div class="foodSlides">
                <div class="numbertext">8 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-8.jpg" style="width:100%">
            </div>

            <div class="foodSlides">
                <div class="numbertext">9 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-9.jpg" style="width:100%">
            </div>

            <div class="foodSlides">
                <div class="numbertext">10 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-10.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">11 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-11.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">12 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-12.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">13 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-13.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">14 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-14.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">15 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-15.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">16 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-16.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">17 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-17.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">18 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-18.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">19 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-19.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">20 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-20.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">21 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-21.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">22 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-22.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">23 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-23.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">24 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-24.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">25 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-25.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">26 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-26.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">27 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-27.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">28 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-28.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">29 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-29.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">30 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-30.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">31 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-31.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">32 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-32.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">33 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-33.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">34 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-34.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">35 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-35.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">36 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-36.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">37 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-37.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">38 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-38.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">39 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-39.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">40 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-40.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">41 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-41.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">42 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-42.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">43 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-43.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">44 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-44.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">45 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-45.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">46 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-46.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">47 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-47.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">48 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-48.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">49 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-49.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">50 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-50.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">51 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-51.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">52 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-52.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">53 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-53.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">54 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-54.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">55 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-55.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">56 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-56.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">57 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-57.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">58 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-58.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">59 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-59.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">60 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-60.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">61 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-61.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">62 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-62.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">63 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-63.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">64 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-64.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">65 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-65.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">66 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-66.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">67 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-67.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">68 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-68.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">69 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-69.jpg" style="width:100%">
            </div>
            <div class="foodSlides">
                <div class="numbertext">70 / 70</div>
                <img id="galleryImg" src="img/FoodDrink/MiAlmaCafe-70.jpg" style="width:100%">
            </div>
            <a class="prev" onclick="plusFoodSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusFoodSlides(1)">&#10095;</a>
        </div>
    </div>

    <div id="interiorModal" class="modal">
        <span class="close cursor" onclick="closeInteriorModal()">&times;</span>
        <div class="modal-content">

            <div class="interiorSlides">
                <div class="numbertext">1 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-5.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">2 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-6.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">3 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-9.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">4 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-10.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">5 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-11.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">6 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-12.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">7 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-13.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">8 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-14.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">9 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-15.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">10 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-16.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">11 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-17.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">12 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-19.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">13 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-20.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">14 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-21.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">15 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-22.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">16 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-23.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">17 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-24.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">18 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-26.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">19 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-27.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">20 / 20</div>
                <img id="interiorImg" src="img/Interior/MiAlmaCafeOpeningCeremony-29.jpg" style="width:100%">
            </div>

            <a class="prev" onclick="plusInteriorSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusInteriorSlides(1)">&#10095;</a>

        </div>
    </div>

    <div id="interiorTModal" class="modal">
        <span class="close cursor" onclick="closeInteriorTModal()">&times;</span>
        <div class="modal-content">

            <div class="interiorTSlides">
                <div class="numbertext">1 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/Concert-2.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">2 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/Concert-7.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">3 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/Concert-9.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">4 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/concert-37.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">5 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/concert-38.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">6 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/concert-39.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">7 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/concert-41.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">8 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/concert-42.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">9 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/concert-43.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">10 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/concert-44.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">11 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/concert-45.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">12 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/concert-46.jpg" style="width:100%">
            </div>

            <div class="interiorTSlides">
                <div class="numbertext">13 / 13</div>
                <img id="interiorImg" src="img/TheaterInterior/DSC_0895.jpg" style="width:100%">
            </div>

            <a class="prev" onclick="plusInteriorTSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusInteriorTSlides(1)">&#10095;</a>

        </div>
    </div>

    <div id="staffModal" class="modal">
        <span class="close cursor" onclick="closeStaffModal()">&times;</span>
        <div class="modal-content">

            <div class="staffSlides">
                <div class="numbertext">1 / 3</div>
                <img id="staffImg" src="img/Staff/staff.jpg" style="width:100%">
            </div>

            <div class="staffSlides">
                <div class="numbertext">2 / 3</div>
                <img id="staffImg" src="img/Staff/staff3.jpg" style="width:100%">
            </div>

            <div class="staffSlides">
                <div class="numbertext">3 / 3</div>
                <img id="staffImg" src="img/Staff/MiAlmaCafeOpeningCeremony-8.jpg" style="width:100%">
            </div>

            <a class="prev" onclick="plusStaffSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusStaffSlides(1)">&#10095;</a>

        </div>
    </div>

    <div id="menuModal" class="modal">
        <span class="close cursor" onclick="closeMenuModal()">&times;</span>
        <div class="modal-content">

            <div class="menuSlides">
                <div class="numbertext">1 / 2</div>
                <img id="galleryImg" src="img/Menu/mi_alma_menu-01.jpg" style="width:100%">
            </div>

            <div class="menuSlides">
                <div class="numbertext">2 / 2</div>
                <img id="galleryImg" src="img/Menu/mi_alma_menu-02.jpg" style="width:100%">
            </div>

            <a class="prev" onclick="plusMenuSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusMenuSlides(1)">&#10095;</a>

        </div>
    </div>

    <script>
        function openFoodModal() {
            document.getElementById("foodModal").style.display = "block";
        }

        function closeFoodModal() {
            document.getElementById("foodModal").style.display = "none";
        }

        function openInteriorModal() {
            document.getElementById("interiorModal").style.display = "block";
        }

        function closeInteriorModal() {
            document.getElementById("interiorModal").style.display = "none";
        }

        function openInteriorTModal() {
            document.getElementById("interiorTModal").style.display = "block";
        }

        function closeInteriorTModal() {
            document.getElementById("interiorTModal").style.display = "none";
        }

        function openStaffModal() {
            document.getElementById("staffModal").style.display = "block";
        }

        function closeStaffModal() {
            document.getElementById("staffModal").style.display = "none";
        }

        function openMenuModal() {
            document.getElementById("menuModal").style.display = "block";
        }

        function closeMenuModal() {
            document.getElementById("menuModal").style.display = "none";
        }

        var foodSlideIndex = 1;
        showFoodSlides(foodSlideIndex);

        var interiorSlideIndex = 1;
        showInteriorSlides(interiorSlideIndex);

        var interiorTSlideIndex = 1;
        showInteriorTSlides(interiorTSlideIndex);

        var staffSlideIndex = 1;
        showStaffSlides(staffSlideIndex);

        var menuSlideIndex = 1;
        showMenuSlides(menuSlideIndex);

        function plusFoodSlides(n) {
            showFoodSlides(foodSlideIndex += n);
        }

        function currentFoodSlide(n) {
            showFoodSlides(foodSlideIndex = n);
        }

        function plusInteriorSlides(n) {
            showInteriorSlides(interiorSlideIndex += n);
        }

        function currentInteriorSlide(n) {
            showInteriorSlides(interiorSlideIndex = n);
        }

        function plusInteriorTSlides(n) {
            showInteriorTSlides(interiorTSlideIndex += n);
        }

        function currentInteriorTSlide(n) {
            showInteriorTSlides(interiorTSlideIndex = n);
        }

        function plusStaffSlides(n) {
            showStaffSlides(staffSlideIndex += n);
        }

        function currentStaffSlide(n) {
            showStaffSlides(staffSlideIndex = n);
        }

        function plusMenuSlides(n) {
            showMenuSlides(menuSlideIndex += n);
        }

        function currentMenuSlide(n) {
            showMenuSlides(menuSlideIndex = n);
        }

        function showFoodSlides(n) {
            var i;
            var slides = document.getElementsByClassName("foodSlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {foodSlideIndex = 1}
            if (n < 1) {foodSlideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[foodSlideIndex-1].style.display = "block";
            dots[foodSlideIndex-1].className += " active";
            captionText.innerHTML = dots[foodSlideIndex-1].alt;
        }

        function showInteriorSlides(n) {
            var i;
            var slides = document.getElementsByClassName("interiorSlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {interiorSlideIndex = 1}
            if (n < 1) {interiorSlideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[interiorSlideIndex-1].style.display = "block";
            dots[interiorSlideIndex-1].className += " active";
            captionText.innerHTML = dots[interiorSlideIndex-1].alt;
        }

        function showInteriorTSlides(n) {
            var i;
            var slides = document.getElementsByClassName("interiorTSlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {interiorTSlideIndex = 1}
            if (n < 1) {interiorTSlideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[interiorTSlideIndex-1].style.display = "block";
            dots[interiorTSlideIndex-1].className += " active";
            captionText.innerHTML = dots[interiorTSlideIndex-1].alt;
        }

        function showStaffSlides(n) {
            var i;
            var slides = document.getElementsByClassName("staffSlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {staffSlideIndex = 1}
            if (n < 1) {staffSlideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[staffSlideIndex-1].style.display = "block";
            dots[staffSlideIndex-1].className += " active";
            captionText.innerHTML = dots[staffSlideIndex-1].alt;
        }

        function showMenuSlides(n) {
            var i;
            var slides = document.getElementsByClassName("menuSlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {menuSlideIndex = 1}
            if (n < 1) {menuSlideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[menuSlideIndex-1].style.display = "block";
            dots[menuSlideIndex-1].className += " active";
            captionText.innerHTML = dots[menuSlideIndex-1].alt;
        }
    </script>
</div>

<br>
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