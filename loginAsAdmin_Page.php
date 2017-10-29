</!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <link rel="shortcut icon" href="Images/icon.ico">
    <title>Grey Hotel</title>
    <link href="UIKIT/css/uikit.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body class="body">
    <div>
        <div class="top-bg-color">
            <div class="ico">
                <img src="Images/logo.png" alt="Grey Hotel" class="ico-image">
            </div>
            <div class="adminHeader">
                <h1>Grey Hotel ADMIN</h1>
            </div>
        </div>
        <div class="log-container uk-clearfix">
            <!-- must have action_page.php-->
            <form class="form-size uk-horizontal">
                <fieldset class="uk-fieldset">
                    <legend class="uk-legend" id="log-text">LOG IN AS ADMIN</legend>
                    <div class="uk-margin">
                        <label class="uk-form-label form-horizontal-text font-Roboto">Username</label>
                        <div class="uk-form-controls">
                            <input class="uk-input uk-form-small" id="form-horizontal-text" type="Email" placeholder="name@example.com">
                            <br>
                            <br>
                            <label class="uk-form-label form-horizontal-text font-Roboto">Password</label>
                            <input class="uk-input uk-form-small" id="form-horizontal-text" type="password">
                            <br>
                            <br>
                            <button class=" uk-button-default log-butt">LOG IN</button> 
                        </div>
                    </div>
            </form>
        </div>
    </div>

    <script src="Jquery/jquery.min.js"></script>
    <script src="UIKIT/js/uikit.js"></script>
    <script src="UIKIT/js/uikit-icons.js"></script>
</body>

</html>