<!DOCTYPE html>
<html>

<head>
    <title>Product Catalog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 <style>
       
        * {
            font-family: 'Quicksand', sans-serif;
        }
        
      
    </style>
</head>

<body>
    <div class="sticky-top" style="z-index: 1000;">
        <?php
include 'Header.php';
?></div>
<div class="row ">
    <div id="carouselExample" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExample" data-slide-to="1"></li>
          <li data-target="#carouselExample" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="height: 67vh;">
          
          <div class="carousel-item " >
            <div class="d-flex justify-content-end">

            <img src="../Assets/Adds/brown-leather-slip-men-s-shoes-fashion.jpg" height="400"  alt="Accessories">
            </div>
            <div class="carousel-caption position-absolute start-0 text-dark" style="margin-right: 50vh;">
              <h5 class="display-3">Office Ware</h5>
              <h4>Find the perfect shoes for your needs.</p>
            </div>
          </div>
          <div class="carousel-item active " >
            <div class="d-flex justify-content-end">

            <img src="../Assets/Adds/fashion-shoes-sneakers.jpg" height="500"   alt="Accessories">
            </div>  
            <div class="carousel-caption d-none d-md-block text-dark" style="margin-right: 70vh;margin-bottom: 20vh;">
              <h5 class="display-3">Nike Air +1</h5>
              <h4>Find the perfect SNEAKER'S for your needs.</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="d-flex ">
            <img src="../Assets/Adds/shoes.jpg" class="ms-4" height="500" alt="Accessories">
            </div>
            <div class="carousel-caption d-none d-md-block text-dark" style="margin-left: 100vh;margin-bottom: 20vh;">
              <h5 class="display-1">Jorden light</h5>
              <h4>Enhance your creativity .</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
   
     
</div>

    <div class="container d-flex p-4">

        <?php
        // Database connection details
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ShoeStore";

        // Create a connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve product data from the ProductDataTbl table
        $sql = "SELECT p.*, b.BrandName, i.ImageName, i.ImageExtension
                FROM ProductDataTbl p
                LEFT JOIN BrandsTbl b ON p.BrandId = b.BrandId
                LEFT JOIN (
                    SELECT ProductId, ImageName, ImageExtension
                    FROM ProductImageTbl
                    GROUP BY ProductId
                ) i ON p.ProductId = i.ProductId";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<a class="text-decoration-none m-2" href="Details.php?PID='.$row['ProductId'].'">';
                echo '<div class="card product-card p-3 shadow" style="width: 15rem;">';
                
                // Display product image if available
                if (!empty($row['ImageName']) && !empty($row['ImageExtension'])) {
                    $imagePath = "../Assets/Products/" . $row['ImageName'] . "" ;
                    echo '<img class="product-image" src="' . $imagePath . '" alt="Product Image">';
                }
                echo '<p class="text-primary">Brand: ' . $row['BrandName'] . '</p>';
                echo '<h4 class="text-dark">' . $row['ProductName'] . '</h4>';
                echo '<h4 class="text-success">Price: ₹' . intval($row['ProductPrice']) . '</p>';
                echo '<h6 style="text-decoration:line-through" class="text-danger">₹' . intval($row['ProductSellingPrice']) . '</p>';
                $discount = intval($row['ProductPrice']) - intval($row['ProductSellingPrice']);
                echo '<p class="badge bg-primary text-light">Discount: ₹' . $discount . '</p>';
               
                
                echo '</div>';
                echo '</a>';
            }
        } else {
            echo '<p>No products found.</p>';
        }

        $conn->close();
        ?>
    </div>
    <div class="sticky-top" style="z-index: 7;">
        <?php
include 'Footer.php';
?></div>
 <!-- Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 
 <script>
   const videoPlayer = document.getElementById('videoPlayer');
   const video = document.getElementById('video');
 
   videoPlayer.addEventListener('focus', function() {
     video.play();
   });
 
   videoPlayer.addEventListener('blur', function() {
     video.pause();
   });
 </script>
</body>

</html>
