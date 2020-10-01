<!-- Name: Sangeev Thapa Magar
    Date: 02/16/2020
    Subject: CS 355 (Advanced Web Programming)
    Assignment 2:PHP Application
-->
<?php
    $hamburger = filter_input(INPUT_POST,'hamburger',FILTER_VALIDATE_INT);
    $fries = filter_input(INPUT_POST,'fries',FILTER_VALIDATE_INT);
    $milkshake = filter_input(INPUT_POST,'milkshake',FILTER_VALIDATE_INT);
    if ($hamburger === null){
        $hamburger = 0;
    }
    if ($fries === null){
        $fries = 0;
    }
    if ($milkshake === null){
        $milkshake = 0;
    }

    $hamburger_price = 2.95;
    $fries_price = 1.95;
    $milkshake_price = 0.85;
    $tax = 0.075;
    $pre_tax = 0.16;
    $hamtotal = $hamburger * $hamburger_price;
    $friestotal = $fries * $fries_price;
    $milkshaketotal = $milkshake * $milkshake_price;
    $subtotal = $hamtotal + $friestotal + $milkshaketotal;
    $taxtotal = $tax * $subtotal;
    $pre_tax_tip = $pre_tax * $subtotal;
    $total = $subtotal + $taxtotal +$pre_tax_tip;

    $hamtotal_formatted = "$".number_format($hamtotal,2);
    $friestotal_formatted = "$".number_format($friestotal,2);
    $milkshaketotal_formatted = "$".number_format($milkshaketotal,2);
    $taxtotal_formatted = "$".number_format($taxtotal,2);
    $pre_tax_tip_formatted = "$".number_format($pre_tax_tip,2);
    $total_formatted = "$".number_format($total,2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assignment.css">
    <title>Final Cost of the Order</title>
</head>
<body>
    <main>
        <h1>Restaurant Order Total</h1>
        
            <table>
                <tr>
                    <td><label for="">Hamburger: </label></td>
                    <td><span><?php echo $hamtotal_formatted;?></span><br></td>
                </tr>
                <tr>
                    <td><label for="">Fries: </label></td>
                    <td><span><?php echo $friestotal_formatted;?></span><br></td>
                </tr>
                <tr>
                    <td><label for="">Milk Shake: </label></td>
                    <td><span><?php echo $milkshaketotal_formatted;?></span><br></td>
                </tr>
                <tr>
                    <td><label for="">Tax: </label></td>
                    <td><span><?php echo $taxtotal_formatted;?></span><br></td>
                </tr>
                <tr>
                    <td><label for="">Tip: </label></td>
                    <td> <span><?php echo $pre_tax_tip_formatted;?></span><br></td>
                </tr>
                <tr>
                    <td> <label for="">Total: </label></td>
                    <td><span><?php echo $total_formatted;?></span><br></td>
                </tr>
            </table> 
        
    </main>
    
</body>
</html>