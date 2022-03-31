<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Price Comparision System</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div id="header"> 
        <span id="title">PRICE COMPARISION SYSTEM</span>
        <span id="header-links">
            <a href="index.php" class="btn btn-primary">Main Page</a>
            <a href="site_settings.php" class="btn btn-info">Site Settings</a>
            <a href="login.php" class="btn btn-warning">Customer Login</a>
        </span>
    </div>
    <div class="registration-form">
        <form action="register_process.php" method="POST">
            <div class="form-group">
                <input type="text" class="form-control item" id="username" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="phone-number" name="phone" placeholder="Phone Number">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="birth-date" name="address" placeholder="Address">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-block create-account" value="Create Account"/>
            </div>


            <?php if (isset($_GET['res'])) { ?>
                    
                    <span style="height:80px; width:400px; background:green; color:white;" > Registered successfully </span>
<?php
            }
  ?>
        </form>
        <div class="social-media">
            <h5>Sign up with social media</h5>
            <div class="social-icons">
                <a href="#"><i class="icon-social-facebook" title="Facebook"></i></a>
                <a href="#"><i class="icon-social-google" title="Google"></i></a>
                <a href="#"><i class="icon-social-twitter" title="Twitter"></i></a>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>