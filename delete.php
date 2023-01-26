<?php
include "./connect.php";

$id = $_GET['id'];

$del = $connect->prepare("DELETE FROM item WHERE id=?");
$del->execute([$id]);

header("Location: history.php");
