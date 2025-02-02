<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4c729db828.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header bg-dark text-white py-3">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="index.php"><h2 class="faq-heading"><b>All To All Mobile</b></h2></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="feedback.php">Feedback</a></li>
                        <li class="nav-item"><a class="nav-link" href="faq.php">FAQ</a></li>
                        <li class="nav-item"><a class="nav-link" href="location.php">Our Location</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#products">Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="#cart">Cart</a></li>
                        <?php if (isset($_SESSION['user_id'])): ?>
                            <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                        <?php else: ?>
                            <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="content-home">
            <div class ="row content-home2">
                <div class="col-lg-7 col-md-5">

                <div class="box-container">
                  <img src="images/Black-headphone.png" class="img-home"alt="banner img">
                </div>
                </div>
                <div class="col-lg-5 col-md-7">
                  <div class="box-container2">
                    <h1 class="home-heading">Designed for <span class="home-span">Best Audio experience</span>  </h1>
                    <p class="para-home">
                      With advanced features, sleek designs, and user-friendly interfaces, our gadgets are perfect for anyone looking to upgrade their tech."
                    </p>
                                      
                  </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer Section -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
        <div class="footer-icons">
    <a href="https://www.facebook.com/profile.php?id=100091625616068"><i class="fab fa-facebook"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="https://www.instagram.com/premguptaa_?utm_source=qr"><i class="fab fa-instagram"></i></a>
        </div>
            <p>&copy; 2025 Shopping Website. All Rights Reserved.</p>

        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>