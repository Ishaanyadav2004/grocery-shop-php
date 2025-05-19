<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Grocery Shop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" xintegrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }


        .nav {
            background-color: #444;
            overflow: hidden;
        }

        .nav ul {
            margin: 0;
            padding: 0;
            list-style: none;
            display: flex;
            justify-content: center;
        }

        .nav ul li {
            flex: 1;
        }

        .nav ul li a {
            color: white;
            text-align: center;
            padding: 14px;
            display: block;
            text-decoration: none;
        }

        .nav ul li a:hover {
            background-color: #555;
        }

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

        .login-container, .register-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: white;
            width: 400px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-group button {
            width: 100%;
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #218838;
        }

        .footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        @media (max-width: 768px) {
            .nav ul {
                flex-direction: column;
            }

            .nav ul li {
                width: 100%;
            }

            .row {
                flex-direction: column;
                align-items: center;
            }

            .card {
                width: 100%;
            }

            .form-container {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <h1>Online Grocery Shop</h1>
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
                <div class="col-lg-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="https://source.unsplash.com/1600x400/?grocery" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Welcome to Our Grocery Store</h5>
                                    <p>Your one-stop shop for all your grocery needs.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://source.unsplash.com/1600x400/?vegetables" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Fresh Vegetables</h5>
                                    <p>Get the freshest vegetables delivered to your doorstep.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://source.unsplash.com/1600x400/?fruits" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Fresh Fruits</h5>
                                    <p>Order from a wide variety of fresh fruits.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-label="Previous"></span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-label="Next"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <p>&copy; 2025 Online Grocery Shop. All rights reserved.</p>
    </footer>
</body>
</html>