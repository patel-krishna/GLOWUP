<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="main.css" />
        <!-- <link rel="stylesheet" type="text/css" href="cabinet.css" /> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        .product-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 20px;
            margin: 10px;
            }

            .card {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.3);
            padding: 20px;
            text-align: center;
            }
    </style>
    
    
    </head>
<body>


    <div class="sidebar">
    <a href="home.html" class="logo">GlowUp</a>
        <a class="active" href="cabinet.php">Your Cabinet</a>
        <a href="friends.html">Your Friends</a>
        <a href="surveys.html">Surveys</a>
    </div>




<div class="content">

       


    <div class="main-section">
        <h1>Your Cabinet</h1>
        <a href="addproduct.php"><button class="button-47">Add Product</button></a>
        <br>
        <div class="product-list">
        <!-- <div class="card">
            <img src="resources/images/blush.png">
            <div class="info-card">
                <h4>Brand - Name</h4>
                <p>Category - Type</p>
                <p>Purchased on</p>
            </div>
        </div> -->
        <?php
            $xml = simplexml_load_file("resources/products.xml") or die("Error: Cannot create object");

            foreach($xml->product as $product){
                echo "<div class='card'>";
                    echo "<img src='{$product->image}'>";
                    echo "<div class='info-card'>";
                        echo "<h4> {$product->brand} - {$product->name}</h4>";
                        echo "<p>{$product->category} - {$product->type}</p>";
                        echo "<p>Purchased on: {$product->date}</p>";
                    echo "</div>";
                echo "</div>";
            }
        
        ?>
        </div>
    </div>
    
    <div class="side-section">
        <h3>Filters<h3>
    </div>
</div>


<script src="main.js"></script>
</body>
</html>