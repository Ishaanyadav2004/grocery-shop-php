<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }

        .card {
            background-color: white;
            width: 300px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
            padding: 10px;
            text-align: center;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
        }

        .card h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .card button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .card button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <header class="header">
        <h1>Product Catalogue</h1>
    </header>
    <nav class="nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="catalogue.php">Catalogue</a></li>
            <li><a href="register.php">Register</a></li>
        </ul>
    </nav>
    <main>
        <div class="container">
            <div class="row">
                <?php
                require 'db_connect.php';
                $sql = "SELECT item_id, name, description, price, image_url FROM Items";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='card'>";
                        echo "<img src='" . $row["image_url"] . "' alt='" . $row["name"] . "'>";
                        echo "<h2>" . $row["name"] . "</h2>";
                        echo "<p>" . $row["description"] . "</p>";
                        echo "<p>Price: $" . $row["price"] . "</p>";
                        echo "<button onclick='addToCart(" . $row["item_id"] . ")'>Add to Cart</button>";
                        echo "</div>";
                    }
                } else {
                    echo "<div class='col-lg-12'><p>No items found</p></div>";
                }
                $conn->close();
                ?>
            </div>
        </div>
    </main>
    <footer class="footer">
        <p>&copy; 2025 Online Grocery Shop. All rights reserved.</p>
    </footer>
    <script>
        function addToCart(itemId) {
            alert("Item added to cart. Item ID: " + itemId);
        }
    </script>
</body>
</html>