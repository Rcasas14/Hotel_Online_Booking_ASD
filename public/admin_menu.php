
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php confirm_logged_in(); ?>


<!DOCTYPE html>
<html>

<head>
	<title>Admin Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <link rel="shortcut icon" href="Images/icon.ico">
    <title>Grey Hotel</title>
    <link href="UIKIT/css/uikit.css" rel="stylesheet">
    <link href="stylesheets/admin.css" rel="stylesheet" type="text/css">
    
</head>

<body class="body">

        <div class="top-bg-color">
            <div class="ico">
                <img src="Images/logo.png" alt="Grey Hotel" class="ico-image">
            </div>
            <div class="adminHeader">
                <h2>Grey Hotel ADMIN</h2>
                <p class="welcome">Welcome to the admin area, <?php echo htmlentities($_SESSION["username"]); ?>! </p>
            </div>
        <div>

        <aside class="sidebar">
            <center><h3>- Admin Menu -</h3></center>
            <hr>
            <div class="sidebar_links">
                <ul>
                    <li><a href="manage_admins.php" target="iframe_content" class="h">Manage Admins</a></li>
                    <br>
                    <li><a href="manage_clients.php" target="iframe_content" class="h">Manage Clients</a></li>
                    <br>
                    <li><a href="manage_rooms.php" target="iframe_content" class="h">Manage Room Information</a></li>
                    <br>
                    <li><a href="pending_reservations.php" target="iframe_content" class="h">Pending Reservations</a></li>
                    <br>
                    <li><a href="approved_reservations.php" target="iframe_content" class="h">Approved Reservations</a></li>
                    <br>
                    <li><a href="declined_reservations.php" target="iframe_content" class="h">Declined Reservations</a></li>
                    <br>
                    <li><a href="archived_reservations.php" target="iframe_content" class="h">Archived Reservations</a></li>
                    <br>
                    <li><a href="logout.php" class="h">Log out</a></li>
                </ul>
            </div>
        </aside>

        <div class="content">
            <iframe height="auto" width="1000px" name="iframe_content"></iframe>
        </div>

    <script src="Jquery/jquery.min.js"></script>
    <script src="UIKIT/js/uikit.js"></script>
    <script src="UIKIT/js/uikit-icons.js"></script>

</body>

</html>