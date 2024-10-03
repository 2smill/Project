<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentura</title>

    <link rel="icon" href="/assets/images/dlogo.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/navigationbar.css"> <!-- Link to your external CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome for icons -->
</head>
<body>
    <!-- Navbar -->
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg custom-navbar"> <!-- Use custom class -->
    <div class="container">
        <a class="navbar-brand" href="homepage.php">
            <img src="/assets/images/DENTURA.png" alt="DENTURA" style="width: 100px; height: auto;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item category">
                    <a class="nav-link" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="#">Braces</a></li>
                            <li><a class="dropdown-item" href="#">Whitening</a></li>
                            <li><a class="dropdown-item" href="#">Veeners</a></li>
                            <li><a class="dropdown-item" href="#">Filings</a></li>
                            <li><a class="dropdown-item" href="#">Cleaning</a></li>
                            <li><a class="dropdown-item" href="#">Extractions</a></li>
                            <li><a class="dropdown-item" href="#">Dental Surgery</a></li>
                        </ul>
                    </li>
                <li class="nav-item category">
                    <a class="nav-link" href="#about">About us</a>
                </li>
            </ul>
            <ul class="navbar-nav social-icons">
                <li class="nav-item">
                    <a class="nav-link circle-icon" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link circle-icon" href="https://x.com/?lang=en"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link circle-icon" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn btn-contact-us">Contact Us</a>
                </li>
            </ul>
        </div>
    </div> 
</nav>


    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
