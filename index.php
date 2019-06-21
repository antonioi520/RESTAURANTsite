<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 6/17/2019
 * Time: 5:31 PM
 */
?>

<?php include("views/header.html") ?>

<link href="css/mobile.css" rel="stylesheet">

<body>
<!-- Header -->

<?php include("views/nav.html") ?>


<div class="headerwrapper">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="z-index: 1;margin-top:-6.250em;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/Interior/interior2.jpg" class="d-block w-100" alt="..." style="height:59.375em;filter:brightness(20%);object-fit: cover;">
                <div class="carousel-caption d-md-block" id="hero" style="top:150px;">
                    <center>
                        <h1 class="headertext" style="margin-bottom: 190px;">WELCOME TO MI ALMA<br> RESTAURANT</H1>
                    </center>
                    <center>
                        <img src="img/logo.png" style="height:30%;width: 30%;z-index: 1;object-fit: contain;filter:brightness(95%);margin-top:-6em;margin-bottom:10px;">
                    </center>
                    <center>
                        <div href="#contact" id="box" style="margin-top: 1em">
                            <h2 id="headerHours">View Hours</h2>
                        </div>
                    </center>
                    <center>
                        <ul class="headericons">
                            <li style="display: inline;padding:0.5em;"> <div id="test"><a href="https://www.facebook.com/Mi-Alma-1150016415172344/" target="_blank" class="circleborder"><i class="fab fa-facebook-f iconcolor"></i></a></div></li>
                            <li style="display: inline;"><div id="test"><a href="https://www.instagram.com/mialmacafe/?hl=en" target="_blank" class="circleborder"> <i class="fab fa-instagram iconcolor"></i></a></div></li>
                        </ul>
                    </center>
                </div>
            </div>

<!--            <div class="carousel-item">-->
<!--                <img src="img/Interior/interior.jpg" class="d-block w-100" alt="..." style="height:950px;filter:brightness(20%);object-fit: cover">-->
<!--                <h1 class="headertext">WELCOME TO MI ALMA<br> RESTAURANT</H1>-->
<!--                <img src="img/logo.png" style="height:30%;width: 30%;margin: 180px;position: absolute;z-index: 1;left:26%;top:20%;object-fit: contain;filter:brightness(95%);">-->
<!--                <a href="#" id="box"><h2 id="headerHours">View Hours</h2></a>-->
<!--                <ul class="headericons">-->
<!--                    <li style="display: inline;padding:0.5em;"> <div id="test"><a href="https://www.facebook.com/Mi-Alma-1150016415172344/" target="_blank" class="circleborder"><i class="fab fa-facebook-f iconcolor"></i></a></div></li>-->
<!--                    <li style="display: inline;"><div id="test"><a href="https://www.instagram.com/mialmacafe/?hl=en" target="_blank" class="circleborder"> <i class="fab fa-instagram iconcolor"></i></a></div></li>-->
<!--                </ul>-->
<!--            </div>-->
        </div>
<!--        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">-->
<!--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--            <span class="sr-only">Previous</span>-->
<!--        </a>-->
<!--        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">-->
<!--            <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
<!--            <span class="sr-only">Next</span>-->
<!--        </a>-->
    </div>
</div>


<!--==========================
  About Section
  ============================-->
<section id="about">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title" style="font-family: 'Satisfy', cursive;letter-spacing: 0.05em;font-size: 3.125em;">About us</h3>
                <div class="section-title-divider"></div>
<!--                <p class="section-description">We are a two man team from different backgrounds in programming coming together to deliver you top-notch websites and other business needs!</p>-->
            </div>
        </div>
    </div>
    <div class="container about-container wow fadeInUp">
        <div class="row">
            <div class="col-lg-6 about-img">
                <img src="img/Staff/staff.jpg" alt="" style="height:638px;object-fit: cover;" id="aboutImg">
            </div>

            <div class="col-md-6 about-content">
                <h2 class="about-title">We provide excellent food and quality services for our customers.</h2>
                <p class="about-text">
                    Mi Alma Restaurant is a Latin fusion restaurant brought to Broad Street alongside the newly renovated Bomes Theatre,
                    boasting a luxurious interior, quality ingredients and outstanding service provided by a hard-working staff!
                </p>
                <p class="about-text">
                    Services provided at Mi Alma Restaurant include an array of Dominican/Latin cuisine, events and
                    live concerts. We go out of our way to ensure that your time spent at Mi Alma Restaurant is
                    memorable and of the highest quality!
                </p>
                <h3 style="font-weight: bold;color: #333;">Find Us</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2974.4541081971906!2d-71.41585268432019!3d41.79697697846551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e44f893f923a5f%3A0x86f9ff49752031d1!2s1017+Broad+St%2C+Providence%2C+RI+02905!5e0!3m2!1sen!2sus!4v1560838747202!5m2!1sen!2sus" width="400" height="300" frameborder="0" style="border:0;max-width:100%" allowfullscreen></iframe>            </div>
        </div>
    </div>
</section>
<!--images in middle -->
<section id="middleImages">
    <div class="wrapper">
        <div class="row" style="overflow: hidden;">
                <div class="col-lg-6">
                    <div style="margin: auto;width: 50%;position: absolute;z-index: 1;left:25%;top:10%;">
                        <img src="img/imgheader3.png" style="object-fit: contain;">
                        <h1 style="color:white;font-weight: bolder;padding-top: 2%;margin-bottom: 0;">OUR INGREDIENTS</h1>
                        <strong style="color:white;letter-spacing: 0.05em;">We use fresh ingredients of the highest quality and prepare them expertly, ensuring a quality dining experience.</strong><br><br><br>
                        <a href="menu.php" id="ingredientBox"><h2 id="ingredientBoxText">View Menu</h2></a>
                    </div>
                    <img class="testy" src="img/FoodDrink/MiAlmaCafe-3.jpg" alt="food" style="height:43.750em;width: 62.500em;object-fit: cover;filter:brightness(30%);float:left;">
                </div>
                <div class="col-lg-6">
                    <div style="margin: auto;width: 50%;position: absolute;z-index: 1;left:25%;top:10%;">
                        <img src="img/imgheader3.png">
                        <h1 style="color:white;font-weight: bolder;padding-top: 2%;margin-bottom: 0;">OUR SERVICES</h1>
                        <strong style="color:white;letter-spacing: 0.05em;">Our staff consists of our top notch servers and chefs providing every utility at our disposal
                            to ensure that our customers leave satisfied.</strong><br><br><br>
                        <a href="services.php" id="ingredientBox" style="width:15.000em;"><h2 id="ingredientBoxText">View Services</h2></a>
                    </div>
                    <img class="testy" src="img/Interior/MiAlmaCafeOpeningCeremony-27.jpg" alt="" style="height:43.750em;width: 62.500em;object-fit: cover;filter:brightness(30%);">
                </div>
        </div>
    </div>
</section>
<!--contact-->
<section id="contact">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title" style="font-family: 'Satisfy', cursive;letter-spacing: 0.05em;font-size: 3.125em;">Contact Us</h3>
                <div class="section-title-divider"></div>
                <p class="section-description">Feel free to reach out to us and we'll get right back to you.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 col-md-push-2" style="padding-bottom: 0.625em;">
                <div class="form">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage">One or more of your entries appears to be invalid, please try again.</div>
                    <form action="" method="post" role="form" class="contactForm" id="myForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" minlength="2"  required />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"  required />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" minlength="4"  required />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5"  placeholder="Message" minlength="2" required></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <!-- captcha-->
                            <img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" />
                            <br>
                            <br>
                            <input class="form-control" style="width: 50%; float: left;" placeholder="Enter captcha" type="text" name="captcha_code" size="10" maxlength="6" required />
                            <a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">
                                <img id="content-desktop" src="img/refresh_sm.png" width="9%" height="9%" style="float: left; padding-left: 4px;">
                                <img id="content-mobile" src="img/refresh_sm.png" width="13%" height="13%" style="float: left; padding-left: 4px;">
                            </a>
                        </div>
                        <br>
                        <br>

                        <div class="text-center"><button value="Submit" type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-4 col-md-push-2">
                <div class="info">

                    <div>
                        <i class="fas fa-phone"></i><h4 style="padding-left:1.6em;">Phone</h4>
                        <p>(401) 648-0715</p>
                    </div>
                    <div style="padding-top: 1.250em;">
                        <i class="far fa-calendar-alt"></i><h4 style="padding-left:1.6em;">Hours</h4>
                        <strong>Mon-Tue:</strong><p style="padding-left:0;"> Closed</p><br>
                        <strong>Wed-Thur+Sun:</strong><p style="padding-left:0;"> 12pm-10:30pm</p><br>
                        <strong>Fri-Sat:</strong><p style="padding-left:0;"> 12pm-11:30pm</p>
                    </div>
                    <div style="padding-top: 1.250em;">
                        <i class="fas fa-location-arrow"></i><h4 style="padding-left:1.6em;">Location</h4>
                        <p>1017 Broad Street</p><br>
                        <p>Providence, RI 02905</p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- #footer -->
<?php include("views/footer.html")?>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<?php include("views/includebottom.html") ?>

<script type="text/javascript">
    var frm = $('#myForm');
    frm.submit(function (ev) {
        $.ajax({
            type: frm.attr('method'),
            url: "send_email.php",
            data: frm.serialize(),
            success: function (data) {
                //alert('Your message has been sent, thank you!');
                $("#sendmessage").show();
                $("#myForm")[0].reset();
                document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random();
                return false;
            },
            error: function()
            {
                $("#errormessage").show();
            }
        });

        ev.preventDefault();
    });
</script>
<script>
    var invalidClassName = 'invalid'
    var inputs = document.querySelectorAll('input, select, textarea')
    inputs.forEach(function (input) {
        // Add a css class on submit when the input is invalid.
        input.addEventListener('invalid', function () {
            input.classList.add(invalidClassName)
        })

        // Remove the class when the input becomes valid.
        // 'input' will fire each time the user types
        input.addEventListener('input', function () {
            if (input.validity.valid) {
                input.classList.remove(invalidClassName)
            }
        })
    })
</script>
</body>
</html>
