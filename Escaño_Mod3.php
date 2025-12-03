<!-- Gabriel Z. Escaño -->
<!-- WD-201 -->

<?php
declare(strict_types=1); //this strict types

//associative array
$autoparts = [
    "Works9 Bodykit" => ["price" => 111795.0, "stock" => 3],
    "Garson Ryugi Wheels" => ["price" => 18560.0, "stock" => 2],
    "Vertex Steering Wheel" => ["price" => 1530.0, "stock" => 12],
    "Bride Low Max Seat" => ["price" => 22100.0, "stock" => 8],
    "HKS Hi-Power Exhaust" => ["price" => 2780.0, "stock" => 26],
    "ORC Twin Plate Clutch" => ["price" => 150947.0, "stock" => 4],
];

//global tax rate (12 percentt)
$taxRate = 12;

//function: reorder message
function get_reorder_message(int $stock): string {
    //ternary operator
    return ($stock < 10) ? "Yes" : "No";
}

//function: total value
function get_total_value(float $price, int $quantity): float {
    //return price × quantity
    return $price * $quantity;
}

//function: tax due
function get_tax_due(float $price, int $quantity, int $tax = 0): float {
    //calculate tax
    return ($price * $quantity) * ($tax / 100);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Auto Design Tantalize</title>

    <!-- inline css for minimalisisism -->
    <style>
        body {
            font-family: Arial;
            background-image: url('bgggghsh.jpg');
            background-color: rgba(0, 0, 0, 0.5);
            background-blend-mode: darken;
            background-size: cover;
            background-repeat: no-repeat;
            color: #eee;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            padding-top: 40px;
        }

        h1, h2 {
            text-align: center;
            margin-bottom: 10px;
        }

        table {
            width: 70%;
            border-collapse: collapse;
            background: #1b1b1b;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #444;
            padding: 12px;
            text-align: center;
        }

        th {
            background: #8b0000;
            color: white;
        }
        .site-footer {
            margin-top: 40px;
            padding: 15px 0;
            text-align: center;
            color: #ccc;
            font-size: 14px;
            border-top: 1px solid #444;
            width: 100%;
        }
</style>

</head>

<body>

<h1>Auto Design Tantalize</h1>
<h2>STOCK CONTROL:</h2>

<table>
    <tr>
        <th>Product</th>
        <th>Stock</th>
        <th>Re-order</th>
        <th>Total Value (₱)</th>
        <th>Tax Due (₱)</th>
    </tr>

    <?php
    //foreach (key => value)
    foreach ($autoparts as $product_name => $data) {

        //table row
        echo "<tr>";

        //product name
        echo "<td>$product_name</td>";

        //stock level
        $stock = $data["stock"];
        $price = $data["price"];
        echo "<td>$stock</td>";

        //reorder message
        echo "<td>" . get_reorder_message($stock) . "</td>";

        //total value
        $totalValue = get_total_value($price, $stock);
        echo "<td>₱" . number_format($totalValue, 2) . "</td>";

        //tax due
        $taxDue = get_tax_due($price, $stock, $taxRate);
        echo "<td>₱" . number_format($taxDue, 2) . "</td>";

        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
<?php include "footer.php";?>