<html>

<head>

    <link href="owl-carousel/css/owl.carousel.css">
    <link href="owl-carousel/css/owl.theme.default.css">
</head>

<body>
    <div id="owl" class="owl-carousel owl-theme">
        <div class="item">
            <h4>1</h4></div>
        <div class="item">
            <h4>2</h4></div>
        <div class="item">
            <h4>3</h4></div>
        <div class="item">
            <h4>4</h4></div>
        <div class="item">
            <h4>5</h4></div>
        <div class="item">
            <h4>6</h4></div>
        <div class="item">
            <h4>7</h4></div>
        <div class="item">
            <h4>8</h4></div>
        <div class="item">
            <h4>9</h4></div>
        <div class="item">
            <h4>10</h4></div>
        <div class="item">
            <h4>11</h4></div>
        <div class="item">
            <h4>12</h4></div>
    </div>
    <script src="Jquery/jquery.min.js"></script>
    <script src="owl-carousel/js/owl.carousel.js"></script>
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
</body>

</html>