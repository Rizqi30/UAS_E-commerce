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

   <section class="content-section container">
      <h2 class="section-header mt-3">HISTORY</h2>
      <div class="cart-row">
         <span class="cart-price cart-header cart-column">NO</span>
         <span class="cart-item cart-header cart-column">ITEM</span>
         <span class="cart-price cart-header cart-column">PRICE</span>
         <span class="cart-quantity cart-header cart-column">QUANTITY</span>`
      </div>

      <?php
      $i = 1;
      while ($item = mysqli_fetch_array($data)) {
         $image = $item['image'];
      ?>
         <div class="cart-row">
            <span class="cart-price cart-column"><?php echo $i ?></span>
            <div class="cart-item cart-column">
               <img class="cart-item-image" src="<?php echo $image ?>" width="100" height="100">
               <span class="cart-item-title" name=""><?php echo $item['title'] ?></span>
            </div>
            <span class="cart-price cart-column"><?php echo $item['price'] ?></span>
            <div class="cart-quantity cart-column"><?php echo $item['quantity'] ?></div>
         </div>
      <?php
         $total = $total + ($item['price'] * $item['quantity']);
         $i++;
      }

      ?>

      <h1 class="mt-5 text-center">Complete Your Order</h1>
      <form method="post" action="checkoutAction.php">
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" required>
         </div>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No Telepon</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tlp" required>
         </div>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" required></textarea>
         </div>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kota</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kota" required>
         </div>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">TotalHarga</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Rp <?php echo $total ?>" name="total" readonly>
         </div>
         <div class="cart-total btn-purchase mb3 form-check">
            <button type="submit" class="btn btn-primary">Checkout</button>
         </div>
      </form>

   </section>

   <section class="content-section container">

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