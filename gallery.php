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
    <title>Mi Almas Cafe</title>


    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">
    <link href="css/gallery.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/v4-shims.css">



</head>
<body>
<!-- Header -->

<nav class="navbar navbar-expand-lg navbar-inverse bg-blackish2" style="z-index: 2;">
    <div class="col-md-2"></div>
    <img src="img/logo.png" alt="logo" style="height: 85px;width: 180px;margin-top:-5px;">
    <!--<a class="navbar-brand" href="#" style="color:white">Mi Almas Cafe</a>-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto ">
            <li class="nav-item active">
                <a class="nav-link" href="#" style="padding-right:20px;">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="padding-right:20px;">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="padding-right:20px;">Ingredients</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="padding-right:20px;">Services</a>
            </li>
        </ul>
        <ul class="navbar-nav md-auto ">
            <li class="nav-item">
                <a class="nav-link" href="#">About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact us</a>
            </li>
        </ul>
    </div>
    <div class="col-md-2"></div>
</nav>

<br>

<h1 style="text-align:Center">Gallery</h1>
<br>
<hr>

<div class="wrapper">
    <h2 style="text-align:left">Food & Drink</h2>
    <hr>
    <div class="row">
        <div class="column">
            <img src="img/FoodDrink/1.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(1)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="img/FoodDrink/2.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(2)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="img/FoodDrink/3.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(3)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="img/FoodDrink/4.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(4)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="img/FoodDrink/5.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(5)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="img/FoodDrink/6.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(6)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="img/FoodDrink/7.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(7)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="img/FoodDrink/8.jpg" style="width:100%" onclick="openFoodModal();currentFoodSlide(8)" class="hover-shadow cursor">
        </div>
    </div>

    <br>
    <hr>
    <h2 style="text-align:left">Interior</h2>
    <hr>
    <div class="row">
        <div class="column">
            <img src="img/Interior/interior.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(1)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="img/Interior/interior2.jpg" style="width:100%" onclick="openInteriorModal();currentInteriorSlide(2)" class="hover-shadow cursor">
        </div>
    </div>

    <br>
    <hr>
    <h2 style="text-align:left">Staff</h2>
    <hr>
    <div class="row">
        <div class="column">
            <img src="img/Staff/staff.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(1)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="img/Staff/staff3.jpg" style="width:100%" onclick="openStaffModal();currentStaffSlide(2)" class="hover-shadow cursor">
        </div>
    </div>

    <div id="foodModal" class="modal">
        <span class="close cursor" onclick="closeFoodModal()">&times;</span>
        <div class="modal-content">

            <div class="foodSlides">
                <div class="numbertext">1 / 8</div>
                <img src="img/FoodDrink/1.jpg" style="width:100%">
            </div>

            <div class="foodSlides">
                <div class="numbertext">2 / 8</div>
                <img src="img/FoodDrink/2.jpg" style="width:100%">
            </div>

            <div class="foodSlides">
                <div class="numbertext">3 / 8</div>
                <img src="img/FoodDrink/3.jpg" style="width:100%">
            </div>

            <div class="foodSlides">
                <div class="numbertext">4 / 8</div>
                <img src="img/FoodDrink/4.jpg" style="width:100%">
            </div>

            <div class="foodSlides">
                <div class="numbertext">5 / 8</div>
                <img src="img/FoodDrink/5.jpg" style="width:100%">
            </div>

            <div class="foodSlides">
                <div class="numbertext">6 / 8</div>
                <img src="img/FoodDrink/6.jpg" style="width:100%">
            </div>

            <div class="foodSlides">
                <div class="numbertext">7 / 8</div>
                <img src="img/FoodDrink/7.jpg" style="width:100%">
            </div>

            <div class="foodSlides">
                <div class="numbertext">8 / 8</div>
                <img src="img/FoodDrink/8.jpg" style="width:100%">
            </div>

            <a class="prev" onclick="plusFoodSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusFoodSlides(1)">&#10095;</a>

        </div>
    </div>

    <div id="interiorModal" class="modal">
        <span class="close cursor" onclick="closeInteriorModal()">&times;</span>
        <div class="modal-content">

            <div class="interiorSlides">
                <div class="numbertext">1 / 2</div>
                <img src="img/Interior/interior.jpg" style="width:100%">
            </div>

            <div class="interiorSlides">
                <div class="numbertext">2 / 2</div>
                <img src="img/Interior/interior2.jpg" style="width:100%">
            </div>

            <a class="prev" onclick="plusInteriorSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusInteriorSlides(1)">&#10095;</a>

        </div>
    </div>

    <div id="staffModal" class="modal">
        <span class="close cursor" onclick="closeStaffModal()">&times;</span>
        <div class="modal-content">

            <div class="staffSlides">
                <div class="numbertext">1 / 2</div>
                <img src="img/Staff/staff.jpg" style="width:100%">
            </div>

            <div class="staffSlides">
                <div class="numbertext">2 / 2</div>
                <img src="img/Staff/staff3.jpg" style="width:100%">
            </div>

            <a class="prev" onclick="plusStaffSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusStaffSlides(1)">&#10095;</a>

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

        function openStaffModal() {
            document.getElementById("staffModal").style.display = "block";
        }

        function closeStaffModal() {
            document.getElementById("staffModal").style.display = "none";
        }

        var foodSlideIndex = 1;
        showFoodSlides(foodSlideIndex);

        var interiorSlideIndex = 1;
        showFoodSlides(interiorSlideIndex);

        var staffSlideIndex = 1;
        showFoodSlides(staffSlideIndex);

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

        function plusStaffSlides(n) {
            showStaffSlides(staffSlideIndex += n);
        }

        function currentStaffSlide(n) {
            showStaffSlides(staffSlideIndex = n);
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
    </script>
</div>

<br>
<br>
<!--==========================
Footer
============================-->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="credits">
                    <p style="text-align: center;">Mi Alma Restaurant - 1017 Broad St, Providence, RI 02905</p>
                    <img src="img/logo.png" alt="logo" style="height:100px;width:200px;">
                    <ul style="padding-top: 10px;margin-left:-4%;">
                        <li style="display: inline;"> <div id="test"><a href="https://www.facebook.com/Mi-Alma-1150016415172344/" target="_blank" class="circleborder2"><i class="fab fa-facebook-f iconcolor2"></i></a></div></li>
                        <li style="display: inline;"><div id="test"><a href="https://www.instagram.com/mialmacafe/?hl=en" target="_blank" class="circleborder2"> <i class="fab fa-instagram iconcolor2"></i></a></div></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

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