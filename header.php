<?php
    if(!isset($page_title)){
        $page_title = "Online Grocery";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Css stylesheet -->
    <link rel="stylesheet" href="../css/index.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php echo $page_title?></title>
</head>
<body>
<!-- Nav bar-->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="../html/index.html">My Grocery</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link "  href="../html/index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../php/cart.php">My Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../backstore/myList.php">My List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../html/register.html">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../php/login.php">Login</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Select your service
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#delivery">Delivery</a></li>
                        <li><a class="dropdown-item" href="#pickup">Pick Up</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../backstore/backstore.html">Backstore</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <div class="btn">
                    <a href="#"><i class="fa fa-search fa-lg"style="color:white;"></i></a>
                </div>
            </form>
        </div>
    </div>
</nav>