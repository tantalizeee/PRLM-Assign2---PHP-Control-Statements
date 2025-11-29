<!-- Gabriel Z. Escaño -->
<!-- WD-201 -->

<?php
//variables
$storeName = "Auto Design Tantalize";
$tagline = "Temptation, tailored in steel.";
$owner = "Gabriel Z. Escaño";
$section = "WD-201";

//include and require
require "items.php";

//calculation using loops yuh
$totalPrice = 0;
$totalStock = 0;
$outOfStock = 0;

foreach ($items as $item) {
    $totalPrice += $item["price"];
    $totalStock += $item["stock"];
    if ($item["stock"] == 0) {
        $outOfStock++;
    }
}

//store categories using switch (changes kapag nag add or alis ng items sa items.php ayayayay)
switch (count($items)) {
    case 1:
        $storeCategory = "Single Product Garage";
        break;
    case 2:
    case 3:
    case 4:
        $storeCategory = "Tuned Boutique Inventory";
        break;
    default:
        $storeCategory = "Full Customization Workshop";
}

?>
<!DOCTYPE html>
<html>
<head>
    <title><?= $storeName ?></title>

    <style>
        body {
            font-family: Arial;
            background-image: url('bgggghsh.jpg');
            background-color: rgba(0, 0, 0, 0.5);
            background-blend-mode: darken;
            background-size: cover;
            background-repeat: no-repeat;
            color: white;
            padding: 20px;
        }
        h2 { 
            font-style: italic; 
        }
        h1, h2, h3, p { 
            text-align: center; 
        }
        table {
            width: 70%;
            margin: auto;
            border-collapse: collapse;
            background: #262626;
        }
        th, td {
            border: 1px solid #444;
            padding: 12px;
            text-align: center;
        }
        th {
            background: #910000ff;
        }
    </style>
</head>

<body>

<h1><?= $storeName ?></h1>
<h2><?= $tagline ?></h2>
<h3>Owned by: <?= $owner ?></h3>
<h3><?= $section ?></h3>

<p>
    <?= "Total Products: " . count($items) ?> <br>
    <?= "Combined Stock: $totalStock" ?> <br>
    <?= "Total Price of All Items: ₱$totalPrice" ?> <br>
    <?= "Out of Stock Items: $outOfStock" ?> <br>
</p>
<h3>
    <?= "Store Category: $storeCategory" ?>
</h3>
<table>
    <tr>
        <th>Product</th>
        <th>Price ($)</th>
        <th>Stock</th>
        <th>Status</th>
    </tr>
    <?php
    foreach ($items as $product) {
        echo "<tr>";
        echo "<td>{$product['name']}</td>";
        echo "<td>{$product['price']}</td>";
        echo "<td>{$product['stock']}</td>";

        echo "<td>";
        if ($product['stock'] == 0) {
            echo "Out of Stock";
        } elseif ($product['stock'] <= 2) {
            echo "Low Stock";
        } else {
            echo "Available";
        }
        echo "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
