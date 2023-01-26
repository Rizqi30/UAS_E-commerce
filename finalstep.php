<?php
include 'connect.php';

$total = 0;
$data = mysqli_query($connect, "select * from item");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Official Pamungkas | About</title>
    <meta name="description" content="This is the description">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="checkoutStyle.css" />
</head>

<body>
    <header class="main-header">
        <nav class="nav2 main-nav2">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="store.php">STORE</a></li>
                <li><a href="history.php">HISTORY</a></li>
                <li><a href="about.php">ABOUT</a></li>
            </ul>
        </nav>
        <h1 class="band-name-large">METAMORPHOSIS</h1>
    </header>

    <section class="content-section2 container">
        <h1 class="text-center m-5">Untuk Melanjutkan Mohon Untuk Transfer ke Rekening Berikut <br> 125437586594652341 Atas Nama Pamung Store</h1>

    </section>

    <footer class="main-footer">
        <div class="container main-footer-container">
            <h3 class="band-font">PAMUNGKAS</h3>
            <ul class="nav2 footer-nav2">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>