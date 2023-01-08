<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin View</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <nav class="navbar">
        <ul class="navbar-ul">
            <li class="nav-item-brand"><a href="estore.php">All MART STORE</a></li>
            <li class="nav-item"><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <table>
        <thead>
            <tr>
                <th>NAME</th>
                <th>CATEGORY</th>
                <th>QUANTITY</th>
                <th>TOTAL_PRICE</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('dbconn.php');
            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);
            if (!$result) {
                die("Invalid query:" . $connection->error);
            }
            while ($row = $result->fetch_assoc()) {
                echo "
    <tr>
    <td>$row[NAME]</td>
    <td>$row[CATEGORY]</td>
    <td>$row[QUANTITY]</td>
    <td>$row[TOTAL_PRICE]</td>
    </tr>
    ";
            }
            ?>
        </tbody>
    </table>
    <a class="submit1" id="submit" href="product.php">Add Product</a><br>
</body>

</html>