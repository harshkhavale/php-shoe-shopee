<!DOCTYPE html>
<html>
<head>
    <title>Electronics Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Quicksand', sans-serif;
        }

        .navbar {
            background-color: dodgerblue;
            color: white;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
        }

        .navbar-nav .nav-item .nav-link {
            color: white;
        }

        .jumbotron {
            background-color: dodgerblue;
            color: white;
            padding: 3rem;
        }

        .jumbotron h1 {
            font-size: 48px;
            font-weight: bold;
        }

        .jumbotron p {
            font-size: 18px;
        }

        .card {
            margin-bottom: 20px;
            border: none;
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .card-title {
            font-size: 20px;
            font-weight: bold;
        }

        .card-text {
            font-size: 16px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand text-decoration-none text-light" href="Index.php"> <div class="d-flex mt-4 justify-content-center mb-0">
            <img src="./Assets/data-transfer.png" class="mx-2" height="50" width="50" />
            <h2>GadgetHUB</h2>
        </div></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="Index.php">Home</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="SignIn.php">SignIn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-light rounded-4 bg-light text-dark" href="SignUp.php">SignUp</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron text-center" style="background-color: dodgerblue;">
        <h1>Welcome to your Electronics Shop</h1>
        <p>Find the latest electronics products and accessories.</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/564x/35/c7/a0/35c7a09c7ff3d2127d9da6bbd31edecd.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Smartphones</h5>
                        <p class="card-text"> we provide the latest and greatest smartphones! Find the perfect device for your needs with sleek designs, powerful features, and stunning displays. Our knowledgeable staff will help you choose the right smartphone, and we offer competitive prices and excellent service. Upgrade your mobile experience today at our Mobile Shopee!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1609081219090-a6d81d3085bf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzR8fGhlYWRwaG9uZXN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Headset's</h5>
                        <p class="card-text">Welcome to our Headphone Haven! Experience top-quality sound with our diverse selection of headphones. Our knowledgeable staff will help you find the perfect pair for your style and budget. Enjoy competitive prices and excellent service. Upgrade your audio experience at our Headphone Haven today!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1551816230-c69a383e04f3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Njh8fGxhcHRvcHN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Tablet's</h5>
                        <p class="card-text">Welcome to our Tablet Emporium! Discover the best tablets with sleek designs, powerful features, and stunning displays. Our friendly staff will help you find the perfect tablet for your needs. We offer competitive prices, exclusive deals, and excellent service. Upgrade your digital experience at our Tablet Emporium today!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-top" style="z-index: 7;">
        <footer style="background-color: dodgerblue;color: white;">
            <div class="container text-center p-4" >
              <div class="row">
                <div class="col-md-4">
                  <h4>About Us</h4>
                  <p>we a online digital electronics store.</p>
                </div>
                <div class="col-md-4">
                  <h4>Contact Information</h4>
                  <p>Email: info@gadgethub.com</p>
                  <p>Phone: 123-456-7890</p>
                </div>
                <div class="col-md-4">
                  <h4>Follow Us</h4>
                  <div class="social-icons my-4">
                    <a href="#" target="_blank"><img src="Assets/Icons/facebook.png" height="25" width="25"></a>
                    <a href="#" target="_blank"><img src="Assets/Icons/twitter.png" height="25" width="25"></a>
                    <a href="#" target="_blank"><img src="Assets/Icons/instagram.png" height="25" width="25"></a>
                    <a href="#" target="_blank"><img src="Assets/Icons/whatsapp.png" height="25" width="25"></a>
                  </div>
                </div>
              </div>
              <hr>
              <p>&copy; 2023 Your Website. All rights reserved. | Designed with <span class="text-danger">&hearts;</span> by <a href="https://www.yourwebsitename.com" class="text-light">GadgetHUB.com</a></p>
            </div>
          </footer></div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
