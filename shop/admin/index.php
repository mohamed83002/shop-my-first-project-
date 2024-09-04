<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville+SC&family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Online</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h1> Online Shopping</h1>
                <h3> Discount up to 50%</h3>
                <img src="logo.jpg" alt="banner" width="450px">
                <br>
                <input placeholder="Name of product" type="text" name="name" required>
                <br>
                <input placeholder="Price" type="text" name="price" required>
                <br>
                <input type="file" name="image" id="file" style="display:none;" required>
                <label for="file"> Upload Image</label>
                <br>
                <button name="upload"> Upload Product</button>
                <br>
                <a href="products.php">All products</a>
            </form>
        </div>
        <p>Developed By MOHAMED ELSAYED</p>
    </center>

    <?php
    session_start(); 

    
    if (isset($_SESSION['alert'])) {
        echo "<script>alert('" . $_SESSION['alert'] . "');</script>";
        unset($_SESSION['alert']); 
    }
    ?>
</body>
</html>
