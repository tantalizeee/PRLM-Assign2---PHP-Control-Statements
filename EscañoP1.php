<!-- Gabriel Z. Escaño -->
<!-- WD-201 -->

<?php
//variables
$storeName = "Auto Design Tantalize";
$tagline = "Temptation, tailored in steel.";
$owner = "Gabriel Z. Escaño";
$section = "WD-201";

//arrays
$item1 = ["name" => "Works9 S14 Zenki Bodykit", "price" => "2500", "stock" => 3];
$item2 = ["name" => "Works9 Muffler", "price" => 1000, "stock" => "5"];
$item3 = ["name" => "Garson Ryugi Wheels", "price" => "5000", "stock" => 2];

//type jugglinggg
$totalPrice = $item1["price"] + $item2["price"] + $item3["price"]; 


//expressions and operators exampless
$totalStock = $item1["stock"] + $item2["stock"] + $item3["stock"];
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
        h2{
            font-style: italic;
        }
        h1, h2, h3 {
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

<p style="text-align:center;">
    <?= "Total Products: " ?> 3 <br>
    <?= "Combined Stock: $totalStock" ?> <br>
    <?= "Total Price of All Items: ₱$totalPrice" ?>
</p>
S
<table>
    <tr>
        <th>Product</th>
        <th>Price ($)</th>
        <th>Stock</th>
        <th>Status</th>
    </tr>
    <!-- shorthand echosss -->
    <tr>
        <td><?= $item1["name"] ?></td>
        <td><?= $item1["price"] ?></td>
        <td><?= $item1["stock"] ?></td>
        <td>
            <?= ($item1["stock"] > 0) ? "Available" : "Out of Stock" ?>
        </td>
    </tr>

    <tr>
        <td><?= $item2["name"] ?></td>
        <td><?= $item2["price"] ?></td>
        <td><?= $item2["stock"] ?></td>
        <td>
            <?= ($item2["stock"] > 0) ? "Available" : "Out of Stock" ?>
        </td>
    </tr>

    <tr>
        <td><?= $item3["name"] ?></td>
        <td><?= $item3["price"] ?></td>
        <td><?= $item3["stock"] ?></td>
        <td>
            <?= ($item3["stock"] > 0) ? "Available" : "Out of Stock" ?>
        </td>
    </tr>

</table>

</body>
</html>
