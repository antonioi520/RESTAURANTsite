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
    <link href="css/menu.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/v4-shims.css">



</head>
<body>
<!-- Header -->


<?php include("views/nav_pages.html")?>
<br>

<div class="wrapper">
    <div class="container">
        <h1 class="menu-heading">Mi Alma Menu</h1>
        <br>
        <div class="menu menu-row menu-wrap menu-center">
            <div class="appetizers">
                <h2>APERITIVOS/APPETIZERS</h2>
                <div class="menu-item">
                    <span class="menu-item-title">CALAMARI FRITO <BR> FRIED CALAMARI </span>
                    <span>-</span>
                    <span class="menu-item-price"> 10</span>
                    <p class="menu-item-description">Cherry pepper y salsa marinara.<br> Cherry Pepper and marinara sauce.</p>
                </div>
                <div class="menu-item">
                    <span class="menu-item-title">COCKTAIL DE CAMARAONES<BR>SHRIMP COCKTAIL </span>
                    <span>-</span>
                    <span class="menu-item-price"> 12</span>
                    <p class="menu-item-description">Con aguacate.<br> With avacado.</p>
                </div>
                <div class="menu-item">
                    <span class="menu-item-title">EMPANADAS DE CARNE MECHADA<BR>SHREDDED BEEF EMPANADAS </span>
                    <span>-</span><span class="menu-item-price"> 8</span>
                    <p class="menu-item-description">Con salsa guasacaca.<br> With guasacaca sauce.</p>
                </div>
                <div class="menu-item">
                    <span class="menu-item-title">BERENJENAS PARMESANA<BR>EGGPLANT PARMESAN </span>
                    <span>-</span>
                    <span class="menu-item-price"> 8</span>
                    <p class="menu-item-description">Rodajas de berenjenas, salsa marinara y queso mozzarella gratinado.<br> Eggplant slices, marinara sauce, mozzarella au gratin.</p>
                </div>
            </div>
            <div class="entrees">
                <h2>CARNES/MEAT</h2>
                <div class="menu-item">
                    <span class="menu-item-name">PECHUGA AL GRILL EN SALSA AL AJILLO <BR> GRILLED CHICKEN BREAST IN GARLIC SAUCE </span>
                    <span>-</span>
                    <span class="menu-item-price"> 12</span>
                    <p class="menu-item-description">Con pure de papa.<br> With mashed potatos *add accent over e on pure*</p>
                </div>
                <div class="menu-item">
                    <span class="menu-item-name">RABO DE RES ESTOFADO<BR> STEWED OXTAIL </span>
                    <span>-</span>
                    <span class="menu-item-price"> 16</span>
                    <p class="menu-item-description">Marinado y cocinado lentamente. Servido con arroz y habichuealas y ensalada rusa. <br>
                    Marinated & slow cooked. Served with rice & beans and rusa salad.</p>
                </div>
                <div class="menu-item">
                    <span class="menu-item-name">CHURRASCO ANGUS </span>
                    <span>-</span>
                    <span class="menu-item-price"> 22</span>
                    <p class="menu-item-description">Corte cocinado a su gusto con tope de chimichurri. Servido con tostones y ensaladas. <br>
                    Cooked to your liking and topped with chimichurri. Served with tostones and salad.</p>
                </div>
            </div>
        </div>
    </div>
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