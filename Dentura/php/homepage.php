<!-- index.php -->
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
    <link rel="stylesheet" href="/css/homepage.css"> <!-- Link to your external CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome for icons -->
</head>
<body>
    <!-- Include the Navigation Bar -->
    <?php include 'navigationbar.php'; ?>

    <div class="d-flex align-items-center justify-content-center flex-column flex-lg-row mt-4">
        <div class="image-container me-4">
            <img src="/assets/images/Saly-44.png" alt="image"> <!-- Replace with your image source -->
        </div>

        <main class="text-container">
            <h1>Welcome to Dentura</h1>
            <p>This is your dental clinic management system. We are here to provide you with the best dental care services.</p>
            <a href="#" class="btn" style="background-color: #0085BE; color: white;">Book an Appointment</a>

        </main>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
