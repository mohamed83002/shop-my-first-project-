<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update | تعديل منتج</title>
    <link rel="stylesheet" href="css/index.css">
    <style>
        .main button {
            margin-top: 30px; 
        }

        .main label[for="file"] {
            margin-top: 20px; 
        }
    </style>
</head>
<body>
    <?php
    include('config.php');
    $ID = $_GET['id'];
    $up = mysqli_query($con, "SELECT * FROM products WHERE id = $ID");
    $data = mysqli_fetch_array($up);
    ?>
    <center>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2>Edit Products</h2>
                <input type="text" name='id' value='<?php echo $data['id']?>' style='display:none;'>
                <br>
                <input type="text" name='name' value='<?php echo $data['name']?>'>
                <br>
                <input type="text" name='price' value='<?php echo $data['price']?>'>
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file">Change the product image</label>
                <br>
                <button name='update' type='submit'>Done</button>
                <br><br>
                <a href="products.php">ALL Products</a>
            </form>
        </div>
        <p>Developed By Mohamed Elsayed</p>
    </center>
</body>
</html>
