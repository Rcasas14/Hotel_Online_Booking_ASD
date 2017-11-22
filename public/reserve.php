<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
<?php client_confirm_logged_in(); ?>

<?php 
    $category_set = find_all_categories(); 
    $_SESSION["Category"] = null;
    $_SESSION["Payment"] = null;
?>


</!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <link rel="shortcut icon" href="Images/icon.ico">
    <title>Grey Hotel</title>
    <link href="UIKIT/css/uikit.css" rel="stylesheet">
    <link href="UIKIT/css/uikit-rtl.css" rel="stylesheet">
    <link href="stylesheets/style.css" rel="stylesheet" type="text/css">
    <link href="stylesheets/style2.css" rel="stylesheet" type="text/css">
    <link href="stylesheets/footer-distributed.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div>
         <div class="top-bg-color">
            <div class="ico">
                <a href="index.php"><img src="Images/logo.png" alt="Grey Hotel" class="ico-image"></a>
            </div>
         
            <div class="topnav" id="myTopnav">
                <div class="dropdown">
                    <p class="nav-text"><a href="index.php" class="link-head-text" uk-scroll>HOME</a></p>
                    <div class="dropdown-content">
                        <a href="index.php#about-hotel" uk-scroll>About Grey Hotel</a>
                        <a href="index.php#contact">Contact Us</a>
                    </div>
                </div>
                <p class="nav-text"><a href="rooms.php" class="link-head-text">ROOMS</a></p>
                <p class="nav-text"><a href="reserve.php" class="link-head-text">RESERVE NOW</a></p>
              
            </div>  

    
        <?php if(logged_in()==true || client_logged_in()==true){   ?>

                <div class="login">
                    <p class="nav-text"><a href="client_logout.php" class="link-head-text" >LOG OUT</a></p>
                </div>  

        <?php }else{    ?>

                <div class="login">
                    <p class="nav-text"><a href="log_in.php" class="link-head-text">LOG IN</a></p>
                </div> 

        <?php }   ?>


        </div>
   
        <aside class="sidebar">

            <center><h3>You are logged in, <?php echo htmlentities($_SESSION["username"]); ?>! </h3></center>
            <hr>
            <div class="sidebar_links">
                <ul>
                    <li><a href="client_profile.php" target="iframe_content" class="h">Profile</a></li>
                    <br>

                    <?php while($category = mysqli_fetch_assoc($category_set)) { ?>

                        <li><a href="reservation_form.php?Category=<?php echo urlencode($category["Category"]);?>" target="iframe_content" class="h">Reserve <?php echo htmlentities($category["Category"]); ?></a></li>
                        <br>

                    <?php } ?>
                               
                               
                    <li><a href="recent_reservation.php" target="iframe_content" class="h">Recent Reservation</a></li>                  
                </ul>
            </div>

        </aside>

    </div>

    <div class="content">
            <iframe height="auto" width="1000px" name="iframe_content"></iframe>
    </div>


</body>

</html>
