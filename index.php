</!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <link rel="shortcut icon" href="Images/icon.ico">
    <title>Grey Hotel</title>
    <link href="UIKIT/css/uikit.css" rel="stylesheet">
    <link href="owl-carousel/css/owl.carousel.css">
    <link href="owl-carousel/css/owl.theme.default.css">
    <link href="style.css" rel="stylesheet" type="text/css">



</head>

<body class="body">
    <div>
        <div class="top-bg-color">
            <div class="ico">
                <img src="Images/logo.png" alt="Grey Hotel" class="ico-image">
            </div>
            <div>

                <button type="button" class="login-but"><a href="login-page.php">LOGIN</a></button>
            </div>
            <div class="topnav" id="myTopnav">
                <a href="#home" class="h">HOME</a>
                <a href="#rooms" class="h">ROOMS OFFER</a>
                <a href="#contact" class="h">CONTACT US</a>
                <a href="#booking" class="h">BOOK NOW</a>
            </div>
        </div>
<div class="owl-carousel owl-theme">
    <div class="item"><h4>1</h4></div>
    <div class="item"><h4>2</h4></div>
    <div class="item"><h4>3</h4></div>
    <div class="item"><h4>4</h4></div>
</div>

    </div>


    </div>

    <script src="Jquery/jquery.min.js"></script>
    <script src="UIKIT/js/uikit.js"></script>
    <script src="UIKIT/js/uikit-icons.js"></script>
    <script src="owl-carousel/js/owl.carousel.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true
        });
    </script>

</body>

</html>