<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="main.css" />
    </head>
<body>

  <div class="header">
    <a href="#default" class="logo">GlowUp</a>
    <div class="header-right">
    <a class="active" href="#home">Home</a>
    <a href="cabinet.php">Cabinet</a>
    <a href="#about">About</a>
    </div>
</div>

<div class="add-form">
    <form action="add_product.php" method="POST">
        <div class="form-info">
          <label for="name">Product Name:</label>
          <input type="text" name="prodname" id="prodname" required>
          <br>
          <label for="brand">Product brand:</label>
          <input type="text" name="prodbrand" id="prodbrand" required>
          <br>
          <label for="quantity">Product quantity:</label>
          <input type="number" name="prodqty" id="prodqty">
          <br>
          <label for="category">Product category:</label>
          <select name="prodcategory" id="prodcategory" required>
            <option>Cleansers</option>
            <option>Treatments</option>
            <option>Moisture and Creams</option>
            <option>Makeup</option>
          </select>
          <br>
          <label for="target">This product targets:</label>
          <select name="prodtarget" id="prodtarget">
            <option>Acne</option>
            <option>Hyperpigmentation</option>
            <option>Dryness</option>
            <option>No specific target</option>
          </select>
        </div>
        <div class="button">
           <input type="submit" value="Add Product" class="submit" name="submit">
        </div>
          <!-- <input type="submit" value="Add product to shelf" onClick="addprod()"> -->
      </form>
</div>

<script>
  function addprod() {
    var newprod = document.createElement('div');
    newprod.id  = "newprodid";
    document.getElementById('grid-container').appendChild(newprod);
  }
</script>

</body>
</html>