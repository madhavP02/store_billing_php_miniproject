<?php
include('dbconn.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $category = $_POST["category"];
    $quantity = $_POST["quantity"];
    $totalCost = $_POST["totalCost"];
    $sql = "INSERT INTO Products (NAME, CATEGORY, QUANTITY, TOTAL_PRICE)
VALUES ('$name', '$category', '$quantity', '$totalCost')";
    $result = $conn->query($sql);
    header("location: main.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE PAGE</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <nav class="navbar">
        <ul class="navbar-ul">
            <li class="nav-item-brand"><a href="estore.php">ALL MART STORE</a></li>
            <li class="nav-item"><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <div class="container">
        <form class="register-form" name="createForm" action="" method="POST">
            <label for="name">
                <h3>Name</h3>
            </label>
            <input type="name" id="name" name="name" placeholder="Name"><br><br>
            <label for="category">
                <h3>Category</h3>
            </label>
            <input type="text" id="category" name="category" placeholder="Category"><br><br>
            <label for="category">
                <h3>Quantity</h3>
            </label>
            <input type="text" id="quantity" name="quantity" placeholder="Quantity"><br><br>
            <label for="totalCost">
                <h3>Total Price</h3>
            </label>
            <input type="text" id="totalCost" name="totalCost" placeholder="Total price"><br><br>
            <label >
                <input class="submit" type="submit" id="submit" value="Submit"><br>
            </label>
        </form>
    </div>
</body>

</html>