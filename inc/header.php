<?php
$url = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gsmwebservers</title>

    <!-- Bootstrap -->
    <link href="<?php echo $url ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- fontawesome -->
    <link href="<?php echo $url ?>assets/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="<?php echo $url ?>assets/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="<?php echo $url ?>assets/fontawesome/css/solid.min.css" rel="stylesheet">


    <!-- custom css -->
    <link href="<?php echo $url ?>assets/customcss/style.css" rel="stylesheet">
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg p-3">
        <div class="container-fluid">
            <a class="navbar-brand bg-white ps-2 pe-2 pb-2 rounded-3" href="index.php">
                <img src="assets/img/logo1.png" alt="logo" width="me-auto" height="24">
            </a> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0 gap-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">
                            <i class="fa-solid fa-house text-info"></i> Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-mobile-screen-button text-info"></i> Our Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="services.php">Services</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="service-details.php">Services Plane</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-regular fa-comment-dots text-info"></i> Contact Us</a>
                    </li>


                </ul>
                <form class="d-flex gap-3" role="search">
                    <!--  -->
                    <!--  -->
                    <div class="text-info fs-4 " id="mode-btns">
                        <i class="fa-regular fa-sun"></i>
                    </div>

                    <div class="btn-group">
                        <a href="registration.php" class="btn btn-warning active d-flex align-items-center gap-2" aria-current="page"><i class="fa-solid fa-address-card d-flex align-items-center gap-2"></i>Registration</a>
                        <a href="login.php" class="btn btn-light"><i class="fa-solid fa-user"></i> Login</a>
                    </div>
                </form>
            </div>
        </div>
    </nav>