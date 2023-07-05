<?php
// PHP code to end the session and redirect to SignInPage

// Start the session
session_start();

// Function to logout and redirect
function logout() {
    // Perform any necessary logout actions here, such as ending the session or clearing session storage/cookies.

    // Destroy the session
    session_destroy();

    // Redirect the user to the SignInPage
    header("Location: ../SignIn.php");
    exit;
}

// Check if the logout button is clicked
if (isset($_POST['logout'])) {
    logout();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Interface</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Quicksand', sans-serif;
        }

        * {
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

        .admin-panel {
            background-color: dodgerblue;
            color: white;
            padding: 20px;
            margin-bottom: 0;
        }

        .admin-panel h4 {
            margin-bottom: 20px;
            font-weight: bold;
        }

        .admin-panel ul {
            list-style: none;
            margin-top: 100px;
            padding-left: 30px;
        }

        .admin-panel li {
            margin-bottom: 10px;
        }

        .admin-panel a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body>


    <div class="container-fluid">
        <div class="row">

            <div class="col-md-3 admin-panel">
                <div class="d-flex my-4 justify-content-center">
                    <img src="../Assets/data-transfer.png" class="mx-2" height="50" width="50" />
                    <h3>GadgetHUB</h3>
                </div>
                <ul class="" id="sidebar">
                    <li class="my-4"><a class="h4" href="dashboard.php" target="content">Dashboard</a></li>
                    <li class="my-4"><a class="h4" href="products.php" target="content">Products</a></li>
                    <li class="my-4"><a class="h4" href="Deliveries.php" target="content">Orders</a></li>
                    <li class="my-4"><a class="h4" href="UsersData.php" target="content">Customers</a></li>
                    <li class="my-4"><a class="h4" href="brands.php" target="content">Brands</a></li>
                    <li class="my-4"><a class="h4" href="categories.php" target="content">Categories</a></li>
                    <li class="my-4"><a class="h4" href="FeedbackData.php" target="content">Feedback's</a></li>

                    <li class="" style="margin-top:100px">
                        <form method="post">
                            <button class=" btn  btn-light btn-pill text-dark" type="submit" name="logout">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">

                <iframe name="content" style="width:100%; height:100%; border:none;"></iframe>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
