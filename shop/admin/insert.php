<?php
session_start(); 
include('config.php'); 

if (isset($_POST['upload'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = "images/" . $image_name;

   
    $name = mysqli_real_escape_string($con, $name);
    $price = mysqli_real_escape_string($con, $price);

    
    $insert = "INSERT INTO products(name, price, image) VALUES ('$name', '$price', '$image_up')";

    if (mysqli_query($con, $insert) && move_uploaded_file($image_location, $image_up)) {
        $_SESSION['alert'] = 'something went wrong' . mysqli_error($con); 
        $_SESSION['alert'] = 'The product has been published successfully';
    }
    
    header('location:index.php'); 
    exit(); 
}
?>
