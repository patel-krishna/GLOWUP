<?php
if(isset($_POST['submit']))
{
    
    $xml = new DOMDocument('1.0', "UTF-8");
    $xml->preserveWhiteSpace = false;
    $xml->formatOutput = true;
    $xml->load("../resources/products.xml");

    $id = $xml -> getElementsByTagName("next")->item(0)->textContent; 
    $name = $_POST['prodname'];
    $brand = $_POST['prodbrand'];
    $type = $_POST['prodtype'];
    $category = $_POST['prodcategory'];
    $date = $_POST['datePurchased'];
    $image = null; 
    // $shelf = null;

    // if($category == "Cleansers"){
    //     $shelf = $xml->getElementsByTagName("cleanser_oils")->item(0);
    // } else if($category == "Treatments"){
    //     $shelf = $xml->getElementsByTagName("treatments")->item(0);
    // } else if($category == "Moisture and Creams"){
    //     $shelf = $xml->getElementsByTagName("moisture")->item(0);
    // } else if($category == "Makeup"){
    //     $shelf = $xml->getElementsByTagName('makeup')->item(0);
    // }else {
    //     // handle the case where $category doesn't match any of the above conditions
    //     echo "shelf is null";
    // }

    // switch ($category) {
    //     case "Cleansers":
    //         $shelf = $xml->getElementsByTagName("cleanser_oils")->item(0);
    //         break;
    //     case "Treatments":
    //         $shelf = $xml->getElementsByTagName("treatments")->item(0);
    //         break;
    //     case "Moisture and Creams":
    //         $shelf = $xml->getElementsByTagName("moisture")->item(0);
    //         break;
    //     case "Makeup":
    //         $shelf = $xml->getElementsByTagName("makeup")->item(0);
    //         break;
    //     default:
    //         echo "Invalid category: " . $category;
    //         break;
    // }
    

    // images
    switch($type){
        case 'Cleanser':
            $image = "../resources/images/cleanser.png";
            break;
        case 'Toner':
            $image = "../resources/images/toner.png";
            break;
        case 'Serum':
            $image = "../resources/images/serum.png";
            break;
        case 'Moisturizer':
            $image = "../resources/images/moisturizer.png";
            break;
        case 'Eye Cream':
            $image = "../resources/images/eyecream.png";
            break;
        case 'Sunscreen':
            $image = "../resources/images/sunscreen.png";
            break;
        case 'Face Oil':
            $image = "../resources/images/faceoil.png";
            break;
        case 'Exfoliator':
            $image = "../resources/images/exfoliator.png";
            break;
        case 'Mask':
            $image = "../resources/images/mask.png";
            break;
        case 'Lip Mask':
            $image = "../resources/images/lipmask.png";
            break;
        case 'Foundation':
            $image = "../resources/images/foundation.png";
            break;
        case 'Concealer':
            $image = "../resources/images/concealer.png";
            break;
        case 'Powder':
            $image = "../resources/images/powder.png";
            break;
        case 'Blush':
            $image = "../resources/images/blush.png";
            break;
        case 'Highlighter':
            $image = "../resources/images/highlighter.png";
            break;
        case 'Eyeshadow':
            $image = "../resources/images/eyeshadow.png";
            break;
        case 'Mascara':
            $image = "../resources/images/mascara.png";
            break;
        case 'Lipstick':
            $image = "../resources/images/lipstick.png";
            break;
    }


    //increment next product ID
    $xml->getElementsByTagName("next")->item(0)->textContent = $id + 1;

    $product = $xml ->createElement("product");

    $add_id = $xml->createElement("id",$id);
    $add_name = $xml->createElement("name",$name);
    $add_brand = $xml->createElement("brand",$brand);
    $add_category = $xml->createElement("category",$category);
    $add_type = $xml->createElement("type",$type);
    $add_date = $xml->createElement('date', $date);
    $add_image = $xml->createElement('image', $image);

    // Append the child elements to the <product> element
    $product->appendChild($add_id);
    $product->appendChild($add_name);
    $product->appendChild($add_brand);
    $product->appendChild($add_category);
    $product->appendChild($add_type);
    $product->appendChild($add_date);
    $product->appendChild($add_image);
    
    // Append the new product to the shelf
    //$shelf->appendChild($product);

    $cabinet = $xml->getElementsByTagName('cabinet')->item(0);
    $cabinet->appendChild($product);

    // Save the changes to the XML file
    $xml->save("../resources/products.xml") or die("Error, unable to create xml file.");
    header("Location: cabinet.php");
} 
?>