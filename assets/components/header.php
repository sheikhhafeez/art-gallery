<?php
 include "./dashboard/components/backend.php"; 
?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Gallery</title>
    <link rel="icon" href="assets/images/fav-icon.png" type="favicon.png" sizes="32x32">
    <link rel="stylesheet" href="assets/css/lib.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>

<header class="container main-pad">
        <div class="row">
            <div class="col-lg-4">
                <div class="menu-logo">
                <a href="index.php"><img src="assets/images/main-logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="menu-box">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="artwork.php">Artworks</a></li>
                        <li><a href="artist.php">Artists</a></li>
                        <li><a href="contact.php" class="btn t-btn">Contact</a></li>
                        <?php if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){ ?>
                        <li><a href="dashboard/login.php" class="btn t-btn">Login</a></li>
                        <?php }elseif(isset($_SESSION['loggedin'])){ ?>
                            <?php if($_SESSION['role'] == 1 || $_SESSION['role'] == 2){ ?>
                            <li class="dropdown_nav"><a href="#" class="btn t-btn">Login</a>
                            <ul class="dropdown_nav_box">
                                <li><a href="dashboard/index.php">Dashboard</a></li>
                                <li><a href="dashboard/logout.php">logout</a></li>
                            </ul>
                        </li>
                        <?php }else{ ?>
                            <li class="dropdown_nav"><a href="#" class="btn t-btn">Login</a>
                            <ul class="dropdown_nav_box">
                                <li><a href="customer-profile.php">Dashboard</a></li>
                                <li><a href="dashboard/logout.php">logout</a></li>
                            </ul>
                        </li>
                        <?php }} ?>
                    </ul>
                </div>
            </div>
        </div>
    </header>