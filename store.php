<!DOCTYPE html>

<?php
include 'connect.php';
// include 'storejs.php';

?>

<html>

<head>
    <title>Official Pamungkas | Store</title>
    <meta name="description" content="This is the description">
    <link rel="stylesheet" href="styles.css" />
    <!-- <script src="store.js" async></script> -->
</head>

<body>
    <header class="main-header">
        <nav class="nav main-nav">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="store.php">STORE</a></li>
                <li><a href="history.php">HISTORY</a></li>
                <li><a href="about.php">ABOUT</a></li>
            </ul>
        </nav>
        <h1 class="band-name-large">METAMORPHOSIS</h1>
    </header>
    <form method="post" action="insert_to_db.php">
        <section class="container content-section">
            <h2 class="section-header">MUSIC</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Album 1</span>
                    <img class="shop-item-image" src="Images/Album1.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp 175000</span>
                        <?php
                        $htmlEle = '<input id="countNum" class="cart-quantity-input" type="number" value="0" name="album1">';

                        $domdoc = new DOMDocument();
                        $domdoc->loadHTML($htmlEle);
                        $xpath = new DOMXpath($domdoc);

                        $query = "//input[@value]";
                        $entries = $xpath->query($query);

                        foreach ($entries as $p) {
                            $count = $p->getAttribute('value');
                            if ($count <= '0') {
                                $p->setAttribute('value', '0');
                                echo $domdoc->saveHTML();
                            }
                        }
                        ?>


                        <!-- <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button> -->
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Album 2</span>
                    <img class="shop-item-image" src="Images/Album2.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp 150000</span>
                        <input class="cart-quantity-input" type="number" value="0" name="album2">
                        <!-- <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button> -->
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Album 3</span>
                    <img class="shop-item-image" src="Images/Album3.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp 175000</span>
                        <input class="cart-quantity-input" type="number" value="0" name="album3">
                        <!-- <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button> -->
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Album 4</span>
                    <img class="shop-item-image" src="Images/Album4.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp 175000</span>
                        <input class="cart-quantity-input" type="number" value="0" name="album4">
                        <!-- <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button> -->
                    </div>
                </div>
            </div>
        </section>
        <section class="container">
            <h2 class="section-header">MERCH</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">T-Shirt</span>
                    <img class="shop-item-image" src="Images/merch1.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp 155000</span>
                        <input class="cart-quantity-input" type="number" value="0" name="merch1">
                        <!-- <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button> -->
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Hoodie</span>
                    <img class="shop-item-image" src="Images/merch2.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp 250000</span>
                        <input class="cart-quantity-input" type="number" value="0" name="merch2">
                        <!-- <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button> -->
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Totebag</span>
                    <img class="shop-item-image" src="Images/merch3.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp 125000</span>
                        <input class="cart-quantity-input" type="number" value="0" name="merch3">
                        <!-- <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button> -->
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Pamungkas Prevent Kit</span>
                    <img class="shop-item-image" src="Images/merch4.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp 115000</span>
                        <input class="cart-quantity-input" type="number" value="0" name="merch4">
                        <!-- <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button> -->
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <!-- <h2 class="section-header">CART</h2>
                <div class="cart-row">
                    <span class="cart-item cart-header cart-column">ITEM</span>
                    <span class="cart-price cart-header cart-column">PRICE</span>
                    <span class="cart-quantity cart-header cart-column">QUANTITY</span>
                </div>
                <div class="cart-items">
                </div>
                <div class="cart-total">
                    <strong class="cart-total-title">Total</strong>
                    <span class="cart-total-price">Rp 0</span>
                </div> -->
            <input class="btn btn-primary btn-purchase" type="submit" value="PURCHASE">
        </section>
    </form>
    <footer class="main-footer">
        <div class="container main-footer-container">
            <h3 class="band-font">PAMUNGKAS</h3>
            <ul class="nav footer-nav">
                <li>
                    <a href="https://www.youtube.com/c/Pamungkas/videos" target="_blank">
                        <img src="Images/YouTube Logo.png">
                    </a>
                </li>
                <li>
                    <a href="https://open.spotify.com/playlist/37i9dQZF1DX19gHrISK5yB?si=39fd6a5c812e44a2" target="_blank">
                        <img src="Images/Spotify Logo.png">
                    </a>
                </li>
            </ul>
        </div>
    </footer>
</body>

</html>