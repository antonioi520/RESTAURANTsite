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
        <br> <hr>
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
                    <span>-</span>
                    <span class="menu-item-price"> 8</span>
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
                    <p class="menu-item-description">Con puré de papa.<br> With mashed potatoes.</p>
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
            <div class="appetizers">
                <h2>ENSALADA/SALAD</h2>
                <div class="menu-item">
                    <span class="menu-item-name">ENSALADA MI ALMA <BR> MI ALMA SALAD </span>
                    <span>-</span>
                    <span class="menu-item-price"> 10</span>
                    <p class="menu-item-description">Mezcla de lechuga, tiras de steak, tomaates asados, zanahorias asadas, y parmesano. Aderezo de oregano fresco. <br>
                    Lettuce mix, steak tips, roasted tomatoes, roasted carrots, parmesan. Fresh orégano dressing.</p>
                </div>
            </div>
            <div class="entrees">
                <h2>MARISCOS/SEAFOOD</h2>
                <div class="menu-item">
                    <span class="menu-item-name">CAMARONES FUSION <BR> FUSION SHRIMP </span>
                    <span>-</span>
                    <span class="menu-item-price"> 12</span>
                    <p class="menu-item-description">Con gajos de papa y mantequilla picante. <br> With potato wedges and spicy butter. </p>
                </div>
                <div class="menu-item">
                    <span class="menu-item-name">SALMON AL GRILL CON CHIMICHURRI DE OLIVA </span>
                    <span>-</span>
                    <span class="menu-item-price"> 18</span>
                    <p class="menu-item-description">Acompañado con puré de papa y grean beans. <br> Served with mashed potatos and green beans. </p>
                </div>
                <div class="menu-item">
                    <span class="menu-item-name">PULPO MEDITERRANEO </span>
                    <span>-</span>
                    <span class="menu-item-price"> 16</span>
                    <p class="menu-item-description">Con papa al limón y salsa romesco. With lime potato and romesco sauce.</p>
                </div>
            </div>
            <div class="appetizers">
                <h2>CALDOS/SOUP</h2>
                <div class="menu-item">
                    <span class="menu-item-name">CREMA DE AUYUAMA <BR> DOMINICAN PUMPKIN CREAM </span>
                    <span>-</span>
                    <span class="menu-item-price"> 6</span>
                    <p class="menu-item-description">Con tope de parmesano rallado. <br> With parmesan.</p>
                </div>
            </div>
            <div class="entrees">
                <h2>ARROCES/RICE</h2>
                <div class="menu-item">
                    <span class="menu-item-name">RISOTTO MAR CARIBE <BR> CARIBEAN SEAS RISOTTO </span>
                    <span>-</span>
                    <span class="menu-item-price"> 22</span>
                    <p class="menu-item-description">Camarones, calamares, pulpo en salsa pomodoro y parmesano. <br>
                    Shrimp, calamari, octopus in pomodoro sauce and parmesan.</p>
                </div>
                <div class="menu-item">
                    <span class="menu-item-name">RISOTTO DE AURAMA Y CHURRASCO </span>
                    <span>-</span>
                    <span class="menu-item-price"> 16</span>
                    <p class="menu-item-description"></p>
                </div>
            </div>
            <div class="entrees">
                <h2>PASTAS</h2>
                <div class="menu-item">
                    <span class="menu-item-name">LINGUINE AL SALMÓN</span>
                    <span>-</span>
                    <span class="menu-item-price"> 14</span>
                    <p class="menu-item-description">Cremosa salsa aurora con vodka. <br> Creamy aurora sauce and vodka.</p>
                </div>
            </div>
            <div class="entrees">
                <h2>PARA COMPARTIR/TO SHARE</h2>
                <div class="menu-item">
                    <span class="menu-item-name">PICADERA DE MARISCOS SEFOOD PLATTER </span>
                    <span>-</span>
                    <span class="menu-item-price"> 20</span>
                    <p class="menu-item-description">Calamares, camarones, pescado, papas fritas. <br> Calamari, shrimp, fish, French fries.</p>
                </div>
                <div class="menu-item">
                    <span class="menu-item-name">PICALONGA <BR> FRIED PLATTER </span>
                    <span>-</span>
                    <span class="menu-item-price"> 18</span>
                    <p class="menu-item-description">Res frito, longaniza, chuleta ahumada, queso, y tostones. <br>
                    Fried beef, longaniza, smoked pork chops, cheese, and fried plantains.</p>
                </div>
            </div>
            <div class="appetizers">
                <h2>ACOMPAÑAMIENTOS/SIDES</h2>
                <div class="menu-item">
                    <span class="menu-item-name">Tostones/Fried Plantains</span>
                    <span>-</span>
                    <span class="menu-item-price"> 5</span> <br>
                    <span class="menu-item-name">Papas fritas/French Fries</span>
                    <span>-</span>
                    <span class="menu-item-price"> 5</span> <br>
                    <span class="menu-item-name">Arroz y Habichuelas/Rice and beans</span>
                    <span>-</span>
                    <span class="menu-item-price"> 5</span> <br>
                    <span class="menu-item-name">Green beans</span>
                    <span>-</span>
                    <span class="menu-item-price"> 5</span> <br>
                    <span class="menu-item-name">Ensalada/Salad</span>
                    <span>-</span>
                    <span class="menu-item-price"> 5</span> <br>
                    <span class="menu-item-name">Pure de papas/Mashed Potatoes</span>
                    <span>-</span>
                    <span class="menu-item-price"> 5</span> <br>
                    <span class="menu-item-name">Ensalada rusa con remolacha/Potato and beet salad</span>
                    <span>-</span>
                    <span class="menu-item-price"> 5</span>
                </div>
            </div>
            <div class="appetizers">
                <h2>PARA LOS PEQUEÑOS/FOR THE LITTLE ONES</h2>
                <div class="menu-item">
                    <span class="menu-item-name">Chicken tenders & Fries</span>
                    <span>-</span>
                    <span class="menu-item-price"> 5</span> <br>
                    <span class="menu-item-name">Fish and chips</span>
                    <span>-</span>
                    <span class="menu-item-price"> 5</span> <br>
                    <span class="menu-item-name">Salchipapas</span>
                    <span>-</span>
                    <span class="menu-item-price"> 5</span> <br>
                    <span class="menu-item-name">Queso frito y maduros/Fried cheese with sweet plantains</span>
                    <span>-</span>
                    <span class="menu-item-price"> 5</span> <br>
                </div>
            </div>
        </div>
        <br> <br>
        <span class="menu-item-name">IMPORTANTE: Algunos articulos vienen crudo o parcialmente cocinando y puede incrementar el risego de enfermedades por alimentos.
        Los consumidores que son especialmente vulnerables sólo debe de comer cames, mariscos y otras comida de animales completamenta cocinados.
        Por favor notifiquemos inmediantamente de cualquier alergia que usted tenga.
        <br> <br>
        IMPORTANT: Some menu items are raw or partially cooked and can increase your risk of food borne illness. Consumers who are especially
        vulnerable to food borne illness should only eat meat, seafood and other food from animal thoroughly cooked. Please notify us immediately of any
        food allergies you have.</span>

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