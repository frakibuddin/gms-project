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
    <link rel="stylesheet" href="<?php echo $url ?>../userpanel/assets/css/style.css">


</head>

<body class="">
    <nav class="navbar navbar-expand-lg shadow-sm p-3">
        <div class="container-fluid">
            <a class="navbar-brand bg-white ps-2 pe-2 pb-2 rounded-3" href="index.php">
                <img src="assets/img/logo1.png" alt="logo" width="me-auto" height="24">
            </a> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- mobile menu -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-none db-991">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.html">
                            <i class="fa-solid fa-table"></i> Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-signal"></i> Our Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="imei-services.php"><i class="fa-solid fa-barcode"></i> IMEI Services</a></li>
                            <li><a class="dropdown-item" href="server-services.php"><i class="fa-solid fa-server"></i> Server Services</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-regular fa-file-lines"></i> Order History
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="imei-order-history.php"><i class="fa-solid fa-barcode"></i> IMEI Services</a></li>
                            <li><a class="dropdown-item" href="server-order-history.php"><i class="fa-solid fa-server"></i> Server Services</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-regular fa-address-card"></i> My Account</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-ticket"></i> Tickets
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-comment"></i> New Ticket</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-comments"></i> Ticket History</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-receipt"></i> Statement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-regular fa-newspaper"></i> News &amp; Updates</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-coins"></i> Buy Credits</a>
                    </li>
                </ul>
                <div class="me-auto "></div>
                <!-- end mobile menu -->
                <form class="d-flex gap-4 align-items-center" role="search">
                    <div class="text-info fs-4 " id="mode-btns">
                        <i class="fa-regular fa-sun"></i>
                    </div>
                    <div class="dropdown ">
                        <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../userpanel/assets/img/img_avatar2.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1 t">Profile</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-light text-small shadow">
                            <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                            <li><a class="dropdown-item" href="invoice.php">Invoice</a></li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <a href="#" class="btn btn-outline-info rounded-5"><i class="fa-solid fa-right-from-bracket"></i>
                            Logout</a>
                    </div>
                </form>
            </div>
        </div>
    </nav>