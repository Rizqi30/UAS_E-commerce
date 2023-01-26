<?php

    include 'connect.php';

    function addDatabase($connect, $title, $price, $quantity, $image){
        mysqli_query($connect,"insert into item values('','$title','$price', '$quantity', '$image')");
    }

    //album 
    if($_POST['album1'] != 0){
        addDatabase($connect, 'Album 1', '175000', $_POST['album1'], 'Images/Album1.jpg');
    }

    if($_POST['album2'] != 0){
        addDatabase($connect,  'Album 2', '150000', $_POST['album2'], 'Images/Album2.jpg');
    }

    if($_POST['album3'] != 0){
        addDatabase($connect, 'Album 3', '175000', $_POST['album3'], 'Images/Album3.jpg');
    }

    if($_POST['album4'] != 0){
        addDatabase($connect, 'Album 4', '175000', $_POST['album4'], 'Images/Album4.jpg');
    }

    //merch
    if($_POST['merch1'] != 0){
        addDatabase($connect, 'T-Shirt', '155000', $_POST['merch1'], 'Images/merch1.jpg');
    }

    if($_POST['merch2'] != 0){
        addDatabase($connect, 'Hoodie', '250000', $_POST['merch2'], 'Images/merch2.jpg');
    }

    if($_POST['merch3'] != 0){
        addDatabase($connect, 'Totebag', '125000', $_POST['merch3'], 'Images/merch3.jpg');
    }

    if($_POST['merch4'] != 0){
        addDatabase($connect, 'Pamungkas Prevent Kit', '115000', $_POST['merch4'], 'Images/merch4.jpg');
    }
    
    header("location:index.php");
?>