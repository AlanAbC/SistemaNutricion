<!DOCTYPE html>
<html xmlns:background="http://www.w3.org/1999/xhtml">
<head>
    <title>Principal</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estiloPrincipal.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <script src="js/swiper.min.js"></script>
</head>
<body>

<div class="head">
    <img class="logo"></img>
    <p class="iniciaS">	Iniciar Sesion</p>
</div>
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide" background: "../img/wallpaper4.jpg"></div>
        <div class="swiper-slide"></div>
        <div class="swiper-slide"></div>
        ...
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>



    <div class="swiper-scrollbar"></div>
</div>
<div class="center" id="center">
    <h1>¿Ques es Nutrition App?</h1>
    <p class="infoApp">Nosotros somos ljlkjlkjlskjlksajlaskjslkjslkjaslkjaslkjlksanwaoiduanoisu skaljdsaljdaslk jdsadkljaskdaskdjsal dskajdkl sdjasdl</p>
    <div class="captura"></div>
    <p class="registro">Registrarse</p>
</div>
<div class="bottom">

    <div class="contacto">

    </div>
    <p>2017 NutritionApp by CLARESTI</p>
</div>
<script>
    var mySwiper = new Swiper ('.swiper-container', {
        // Optional parameters
        direction: 'vertical',
        loop: true,

        // If we need pagination
        pagination: '.swiper-pagination',

        // Navigation arrows
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',

        //e need scrollbar
        scrollbar: '.swiper-scrollbar', // And if w
    })
</script>
</body>
</html>