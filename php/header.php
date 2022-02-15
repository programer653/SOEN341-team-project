<!DOCTYPE html>
<html lang="en">

<head>
    <title>WayToHealth</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!--stylesheet-->
    <link rel="stylesheet" type="text/css" href="../css/sitestyle.css">
    <link rel="stylesheet" type="text/css" href="../css/p5p6.css">
    <link rel="stylesheet" type="text/css" href="../css/p4_cart.css">
    <!--icons-->
    <link rel="shortcut icon" href="../css/sitestyle.css">
</head>

<body>
        <!--header-->
    <nav class="navbar">
        <div class="navbar-container">
            <!--left navbar-->
            <div class="navbar-left">
                <!--logo-->
                <a href="../php/Homepage.php" class="logo">
                    <img src="../images/icon.png" alt="a logo image" width="110px">
                </a>
            </div>
            <!--right navbar-->
            <div class="navbar-right">
                <div class="navbar-right-top">
                    <ul>
                        <!--contact-->
                        <li><a href="../php/p5.php">Log in</a></li>
                        <!--user-->
                        <li><a href="../php/p6.php">Sign up</a></li>
                        <!--shopping cart-->
                        <li class="cart-icon">
                            <a href="../php/p4_shopCart.php"><img src="../images/cart.png" alt="icon of cart" width="30px"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!--menu-->
    <nav class="menu">
        <div class="menu-bar hide">
            <ul>
                <li><a href="../php/Homepage.php">Home</a></li>
                <li><a href="#">Aisle</a>
                    <ul class="dropdown">
                        <li><a href="../php/p2_vegetablePage.php">Vegetables</a></li>
                        <li><a href="../php/p2_fruitsPage.php">Fruits</a></li>
                        <li><a href="../php/p2_meatPage.php">Meat</a></li>
                        <li><a href="../php/p2_milkAndBeverage.php">Beverages</a></li>
                    </ul>
                </li>
                <li><a href="../php/p4_shopCart.php">Cart</a></li>
                <li><a href="#">BackEnd</a>
                    <ul class="dropdown">
                        <li><a href="../php/p8.php">Product</a></li>
                        <li><a href="../php/p7.php">Products List</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="menu-bar show">
            <ul>
                <li><a href="#">Aisle</a>
                    <ul class="dropdown">
                        <li><a href="../php/p2_vegetablePage.php">Vegetables</a></li>
                        <li><a href="../php/p2_fruitsPage.php">Fruits</a></li>
                        <li><a href="../php/p2_meatPage.php">Meat</a></li>
                        <li><a href="../php/p2_milkAndBeverage.php">Beverages</a></li>
                    </ul>
                </li>
                <li><a href="#">BackEnd</a>
                    <ul class="dropdown">
                        <li><a href="../php/p8.php">Product</a></li>
                        <li><a href="../php/p7.php">Products List</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <!--banner-->
    <div class="banner-container">
        <div class="banner">
            <div class="content" style="background-image:url('../images/banner.jpg')">
                <h3><mark class="declaration">We Offer</mark></h3>
                <h3><mark class="declaration">ONE-day delivery</mark></h3>
                <a href="../php/p2_vegetablePage.php" class="btn">SHOP NOW</a>
            </div>
        </div>
    </div>
