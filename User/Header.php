<?php
// Start the session
if (session_status() == PHP_SESSION_NONE) {
    // Start the session
    session_start();
}
// Check if the logout button is clicked
if (isset($_POST['logout'])) {
    // Clear all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect to the sign-in page
    header("Location: ../SignIn.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        * {
            font-family: 'Quicksand', sans-serif;
        }
    </style>

</head>

<body>
    <div class="mt-0 w-100 shadow-lg sticky-top " style="z-index:4000;background-color:dodgerblue">
        <nav class="navbar navbar-expand-lg d-flex justify-content-between" style="font-family: 'Quicksand', sans-serif;">
            <div class="container-fluid " style="height:7vh">
                <a class="navbar-brand text-decoration-none text-light" href="Store.php">
                    <div class="d-flex justify-content-center mb-0">
                        <img src="../Assets/data-transfer.png" class="mx-2" height="50" width="50" />
                        <h2>GadgetHUB</h2>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse position-absolute end-0" id="navbarSupportedContent">
                    <ul class="navbar-nav end-0 me-auto">

                    <?php


// Check if the username is set in the session
if (isset($_SESSION["username"])) {
    // Display the username in the navigation bar
    echo '<li class="nav-item mx-3">
            <a class="nav-link active text-light" aria-current="page">
                <img src="../Assets/Icons/portrait.png" style="height:5vh" class="mx-2" />' . $_SESSION["username"] . '
            </a>
          </li>';
}
?>
                        <li class="nav-item mx-4 mt-2 text-dark">
                            <a runat="server" href="Cart.php" id="mycart" class="position-relative">
                                <img src="../Assets/Icons/shopping-cart.png" style="height:5vh" />
                            </a>
                        </li>
                        <li class="nav-item mx-4 mt-2 text-dark">
                            <a runat="server" href="Feedback.php" id="mycart" class="position-relative">
                                <img src="../Assets/Icons/calendar-lines-pen.png" style="height:5vh" />
                            </a>
                        </li>

                        <li class="nav-item mx-3 mt-2 d-flex justify-content-center">
                            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <button type="submit" name="logout" class="btn btn-light rounded-4 btn-md">
                                    logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="mt-0 w-100 shadow-lg sticky-top bg-light" style="z-index:4000">
        <nav class="navbar navbar-expand-lg d-flex justify-content-between" style="font-family: 'Quicksand', sans-serif;">
            <div class="container-fluid mt-4" style="height:5vh">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent2">
                    <ul class="navbar-nav d-flex justify-content-between">


                        <li class="nav-item mx-4 d-flex justify-content-center">
                            <a class="nav-link active" aria-current="page" href="ProductCategories.php?CATNAME=Smartphones">
                                <div class="m-auto text-center">
                                    <img src="../Assets/Icons/mobile-notch.png" style="height:5vh" />
                                    <p class="">SmartPhones</p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item mx-4 d-flex justify-content-center">
                            <a class="nav-link active" aria-current="page" href="ProductCategories.php?CATNAME=TV&AV">
                                <div class="m-auto text-center">
                                    <img src="../Assets/Icons/screen.png" style="height:5vh" />
                                    <p class="">TV&AV</p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item mx-4 d-flex justify-content-center">
                            <a class="nav-link active" aria-current="page" href="ProductCategories.php?CATNAME=Laptops">
                                <div class="m-auto text-center">
                                    <img src="../Assets/Icons/laptop.png" style="height:5vh" />
                                    <p class="">Laptops</p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item mx-4 d-flex justify-content-center">
                            <a class="nav-link active" aria-current="page" href="ProductCategories.php?CATNAME=Speakers">
                                <div class="m-auto text-center">
                                    <img src="../Assets/Icons/speakers.png" style="height:5vh" />
                                    <p class="">Speakers</p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item mx-4 d-flex justify-content-center">
                            <a class="nav-link active" aria-current="page" href="ProductCategories.php?CATNAME=Tablets">
                                <div class="m-auto text-center">
                                    <img src="../Assets/Icons/tablet.png" style="height:5vh" />
                                    <p class="">Tablets</p>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item mx-4 d-flex justify-content-center">
                            <a class="nav-link active" aria-current="page" href="ProductCategories.php?CATNAME=Smartwatches">
                                <div class="m-auto text-center">
                                    <img src="../Assets/Icons/watch-smart.png" style="height:5vh" />
                                    <p class="">SmartWatches</p>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item mx-4 d-flex justify-content-center">
                            <a class="nav-link active" aria-current="page" href="ProductCategories.php?CATNAME=Earphones">
                                <div class="m-auto text-center">
                                    <img src="../Assets/Icons/headphones.png" style="height:5vh" />
                                    <p class="">EarPhones</p>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item mx-4 d-flex justify-content-center">
                            <a class="nav-link active" aria-current="page" href="ProductCategories.php?CATNAME=Accessories">
                                <div class="m-auto text-center">
                                    <img src="../Assets/Icons/phone-charger.png" style="height:5vh" />
                                    <p class="">Accessories</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

</body>

</html>