<?php
include "./connect.php";

$nama = $_POST['nama'];
$tlp =  $_POST['tlp'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$total = $_POST['total'];

$ins = $connect->prepare('INSERT INTO checkout (Nama, NoTlp, Alamat, Kota, Harga) VALUES (?, ?, ?, ?, ?)');
$ins->execute([$nama, $tlp, $alamat, $kota, $total]);
$connect->query('DELETE FROM item');

header("Location: finalstep.php");
