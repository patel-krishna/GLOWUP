<?php


if(isset($_POST['submit']))
{
    
    $xml = new DOMDocument('1.0', "UTF-8");
    $xml->preserveWhiteSpace = false;
    $xml->formatOutput = true;
    $xml->load("products.xml");

    $id = $xml -> getElementsByTagName("next")->item(0)->textContent; 
    $name = $_POST['prodname'];
    $brand = $_POST['prodbrand'];
    $quantity = $_POST['prodqty'];
    $category = $_POST['prodcategory'];
    $target = $_POST['prodtarget'];

    echo $id;
    echo $name;
    echo $brand;
    echo $quantity;
    echo $category;
    echo $target;

    if($category == "Cleansers"){
        $shelf = $xml->getElementsByTagName('cleanser_oils')->item(0);
    } else if($category == "Treatments"){
        $shelf = $xml->getElementsByTagName('treatments')->item(0);
    } else if($category == "Moisture and Creams"){
        $shelf = $xml->getElementsByTagName('moisture')->item(0);
    } else if($category == "Makeup"){
        $shelf = $xml->getElementsByTagName('makeup')->item(0);
    }else {
        // handle the case where $category doesn't match any of the above conditions
        echo "Invalid category: " . $category;
    }

    //increment next product ID
    $xml->getElementsByTagName("next")->item(0)->textContent = $id + 1;

    $product = $xml ->createElement("product");

    $add_id = $xml->createElement("id",$id);
    $add_name = $xml->createElement("name",$name);
    $add_brand = $xml->createElement("brand",$brand);
    $add_quantity = $xml->createElement("quantity",$quantity);
    $add_category = $xml->createElement("category",$category);
    $add_target = $xml->createElement('target', $target);
    $add_image = $xml->createElement('image', '#');

    // Append the child elements to the <product> element
    $product->appendChild($add_id);
    $product->appendChild($add_name);
    $product->appendChild($add_brand);
    $product->appendChild($add_quantity);
    $product->appendChild($add_category);
    $product->appendChild($add_target);
    $product->appendChild($add_image);
    
    if ($shelf !== null) {
        $shelf->appendChild($product);
        $xml->save("products.xml") or die("Error, unable to create xml file.");
    } else {
        echo "Invalid category: " . $category;
    }
} 
?>