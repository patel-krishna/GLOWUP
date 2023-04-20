<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../style/main.css" />
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

            .filter-section {
                display: flex;
                flex-wrap: wrap;
                }

            .filter {
                width: 50px;
                height: 50px;
                background-color: white;
                margin: 5px;
                width:fit-content;
                padding:0px 3px;
                border-radius: 20px;
                /* border: 0.5px solid black; */
                box-shadow: 0 0.5px 3px rgba(0,0,0,0.3);
                }    
                
                .filter:hover {
                    cursor: pointer;
                }

            .all{
                background-color:dodgerblue;
                color:white;
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
            $xml = simplexml_load_file("../resources/products.xml") or die("Error: Cannot create object");

            foreach($xml->product as $product){
                echo "<div class='card' data-category='{$product->type}'>";
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
        <h3>Filters</h3>
        <div class="filter-section">
                <div class="filter Cleanser"><p>Cleanser</p></div>
                <div class="filter Toner"><p>Toner</p></div>
                <div class="filter Serum"><p>Serum</p></div>
                <div class="filter Moisturizer"><p>Moisturizer</p></div>
                <div class="filter Eye-Cream"><p>Eye Cream</p></div>
                <div class="filter Sunscreen"><p>Sunscreen</p></div>
                <div class="filter Face-Oil"><p>Face Oil</p></div>
                <div class="filter Exfoliator"><p>Exfoliator</p></div>
                <div class="filter Mask"><p>Mask</p></div>
                <div class="filter Lip-Balm"><p>Lip Balm</p></div>
                <div class="filter Foundation"><p>Foundation</p></div>
                <div class="filter Concealer"><p>Concealer</p></div>
                <div class="filter Powder"><p>Powder</p></div>
                <div class="filter Blush"><p>Blush</p></div>
                <div class="filter Highlighter"><p>Highlighter</p></div>
                <div class="filter Eyeshadow"><p>Eyeshadow</p></div>
                <div class="filter Mascara"><p>Mascara</p></div>
                <div class="filter Lipstick"><p>Lipstick</p></div>
                <div class="filter all"><p>Reset</p></div>
        </div>
    </div>
</div>

<script>
    const filters = document.querySelectorAll('.filter');
    const cards = document.querySelectorAll('.card');

    filters.forEach(filter => {
    filter.addEventListener('click', () => {
        const category = filter.classList[1];
        
        cards.forEach(card => {
        if (category === 'all' || card.dataset.category === category) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
        });
    });
    });


</script>

</body>
</html>