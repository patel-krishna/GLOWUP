<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="main.css" />

      <style>
        .content{
          display: flex;
          flex-direction: column;
          text-align: center;
        }
      </style>


    </head>

<body>

<div class="sidebar">
    <a href="home.html" class="logo">GlowUp</a>
        <a class="active" href="cabinet.php">Your Cabinet</a>
        <a href="#">Your Friends</a>
        <a href="surveys.html">Surveys</a>
</div>

<div class="content">
  <h1>Add a product</h1>
    <form action="add_product.php" method="POST">
        <div class="form-info">
          <label for="name">Product Name:</label>
          <input type="text" name="prodname" id="prodname" required>
          <br>
          <label for="brand">Product brand:</label>
          <input type="text" name="prodbrand" id="prodbrand" required>
          <br>
          <label for="category">Product category:</label>
          <select name="prodcategory" id="prodcategory" required>
            <option>Makeup</option>
            <option>Skincare</option>
          </select>
          <br>
          <label for="type">Type of product:</label>
          <select name="prodtype" id="prodtype">
            <option>Cleanser</option>
            <option>Toner</option>
            <option>Serum</option>
            <option>Moisturizer</option>
            <option>Eye Cream</option>
            <option>Sunscreen</option>
            <option>Face Oil</option>
            <option>Exfoliator</option>
            <option>Mask</option>
            <option>Lip Mask</option>
            <option>Foundation</option>
            <option>Concealer</option>
            <option>Powder</option>
            <option>Blush</option>
            <option>Highlighter</option>
            <option>Eyeshadow</option>
            <option>Mascara</option>
            <option>Lipstick</option>
          </select>
          <br>
          <label for="date">Date purchased: </label>
          <input type="date" id="datePurchased" name="datePurchased">
        </div>
        <div class="button">
           <input type="submit" value="Add Product" class="submit" name="submit">
        </div>
          <!-- <input type="submit" value="Add product to shelf" onClick="addprod()"> -->
      </form>
</div>

<script>
    const categoryDropdown = document.getElementById("prodcategory");
    const typeDropdown = document.getElementById("prodtype");

    const typesList = {
      Skincare: ["Lip Mask", "Mask", "Exfoliator", "Face Oil", "Sunscreen", 
    "Eye Cream", "Moisturizer", "Serum", "Toner", "Cleanser"],
      Makeup: ["Foundation", "Concealer", "Powder", "Blush", "Highligther",
    "Eyeshadow", "Mascara", "Lipstick"]
    };

    categoryDropdown.addEventListener("change", () => {
      const selectedCategory = categoryDropdown.value;
      const types = typesList[selectedCategory];

      // Clear current options
      typeDropdown.innerHTML = "";

      // Add new options
      types.forEach(type => {
        const option = document.createElement("option");
        option.text = type;
        typeDropdown.add(option);
      });
    });


</script>

</body>
</html>