<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
      body{
        font-family: 'Roboto', sans-serif;
      }
      #outer-div {
        width: 100%;
        text-align: center;
        background-color: #FFFFFF
      }
      #inner-div {
        display: inline-block;
        margin: 0 auto;
        padding: 3px;
        background-color: lightgray;
        border: 0.5px solid lightgray;
        border-radius: 10px;
      }
    </style>
  </head>
  <body>
    <div id="outer-div">
      <div id="inner-div">
<?php

$products = array(
    array(
        "item_no"=> 1,
        "description"=>"T-shirt",
        "price"=> 30.40,
        "discount" => 0.30
    ),
    array(
        "item_no"=> 2,
        "description"=>"polo shirts",
        "price"=> 45.00,
        "discount" => 0.10
    ),
    array(
        "item_no"=> 3,
        "description"=>"jeans",
        "price"=> 40.70,
        "discount" => 0.00
    ),
    array(
        "item_no"=> 4,
        "description"=>"suit",
        "price"=> 150.00,
        "discount" => 0.25
    ),
    array(
        "item_no"=> 5,
        "description"=>"cap",
        "price"=> 18.90,
        "discount" => 0.50
    ),
    array(
        "item_no"=> 6,
        "description"=>"Jacket",
        "price"=> 154.70,
        "discount" => 0.15
    ),
    array(
        "item_no"=> 7,
        "description"=>"Shorts",
        "price"=> 35.50,
        "discount" => 0.05
    ),
    array(
        "item_no"=> 8,
        "description"=>"Jumper",
        "price"=> 55.50,
        "discount" => 0.40
    ),
    array(
        "item_no"=> 9,
        "description"=>"Boots",
        "price"=> 255.50,
        "discount" => 0.12
    ),
    array(
        "item_no"=> 10,
        "description"=>"Socks",
        "price"=> 11.50,
        "discount" => 0.00
    )
)
?>
<body>
    <div id="main-container">
<?php
    echo "<br><br><br> <h2> Modern wear OFFICIAL RECEIPT</h2>";
    //echo "<br>";
    echo "<br> <h3 style='margin-top= -2rem'>Printed at: " ;

    date_default_timezone_set('Asia/Kuala_Lumpur');

    $dt2=date("l | d-m-Y H:i");
    echo $dt2."<br></h3>";

    echo ".....................................................................................................................................................<br>";
    echo str_repeat('&nbsp;', 50) . "<span> Price x Quantity" .str_repeat('&nbsp;', 15) . "<span> Discount(RM)".str_repeat('&nbsp;', 15) . "<span> Total(RM)".str_repeat('&nbsp;', 15) ."<span> GST total(RM)" ;
    echo "";

    $quantity_item1 = $_GET['quantity_item1'];
    $quantity_item2 = $_GET['quantity_item2'];
    $quantity_item3 = $_GET['quantity_item3'];
    $quantity_item4 = $_GET['quantity_item4'];
    $quantity_item5 = $_GET['quantity_item5'];
    $quantity_item6 = $_GET['quantity_item6'];
    $quantity_item7 = $_GET['quantity_item7'];
    $quantity_item8 = $_GET['quantity_item8'];
    $quantity_item9 = $_GET['quantity_item9'];
    $quantity_item10 = $_GET['quantity_item10'];


    if($quantity_item1 > 0){
        echo "<br> Item No ".$products[0]['item_no'];
        echo "<br>".$products[0]['description'];
        print '<span>' . str_repeat('&nbsp;', 15) . '</span>';
        echo number_format((float)$products[0]['price'],2)." x ".$quantity_item1;
        print '<span>' . str_repeat('&nbsp;', 15) . '</span>';
        $proddiscount= ($products[0]['price'] * $quantity_item1 * $products[0]['discount']);
        echo number_format((float)$proddiscount, 2, '.', '');
        $total1withoutdisc= ($products[0]['price'] * $quantity_item1);
        $total1 = ($products[0]['price'] * $quantity_item1 - round($proddiscount, 1));
        print '<span>' . str_repeat('&nbsp;', 30) . '</span>';
        echo number_format((float)$total1, 2, '.', '');
        print '<span>' . str_repeat('&nbsp;', 30) . '</span>';

    }else{
        $total1=0;
        $total1withoutdisc=0;}
    if($quantity_item2 > 0){
        echo "<br> Item No ".$products[1]['item_no'];
        echo "<br>".$products[1]['description'];
        echo str_repeat('&nbsp;', 19);
        echo number_format((float)$products[1]['price'],2)." x ".$quantity_item2;
        echo str_repeat('&nbsp;', 20);
        $proddiscount= ($products[1]['price'] * $quantity_item2 * $products[1]['discount']);
        echo number_format((float)$proddiscount, 2, '.', '');
        $total2withoutdisc= ($products[1]['price'] * $quantity_item2);
        $total2 = ($products[1]['price'] * $quantity_item2 - round($proddiscount, 1));
        echo str_repeat('&nbsp;', 30);
        echo number_format((float)$total2, 2, '.', '');
        print '<span>' . str_repeat('&nbsp;', 30) . '</span>';

    }else{
        $total2withoutdisc=0;
        $total2=0;}
    if($quantity_item3 > 0){
        echo "<br> Item No ".$products[2]['item_no'];
        echo "<br>".$products[2]['description'];
        print '<span>' . str_repeat('&nbsp;', 25) . '</span>';
        echo number_format((float)$products[2]['price'],2)." x ".$quantity_item3;
        print '<span>' . str_repeat('&nbsp;', 20) . '</span>';
        $proddiscount= ($products[2]['price'] * $quantity_item3 * $products[2]['discount']);
        echo number_format((float)$proddiscount, 2, '.', '');
        $total3withoutdisc= ($products[2]['price'] * $quantity_item3);
        $total3 = ($products[2]['price'] * $quantity_item3 - round($proddiscount, 1));
        print '<span>' . str_repeat('&nbsp;', 33) . '</span>';
        echo number_format((float)$total3, 2, '.', '');
        print '<span>' . str_repeat('&nbsp;', 30) . '</span>';

    }else{
        $total3withoutdisc=0;
        $total3=0;}
    if($quantity_item4 > 0){
        echo "<br> Item No ".$products[3]['item_no'];
        echo "<br>".$products[3]['description'];
        print '<span>' . str_repeat('&nbsp;', 25) . '</span>';
        echo number_format((float)$products[3]['price'],2)." x ".$quantity_item4;
        print '<span>' . str_repeat('&nbsp;', 20) . '</span>';
        $proddiscount= ($products[3]['price'] * $quantity_item4 * $products[3]['discount']);
        echo number_format((float)$proddiscount, 2, '.', '');
        $total4withoutdisc= ($products[3]['price'] * $quantity_item4);
        $total4 = ($products[3]['price'] * $quantity_item4 - round($proddiscount, 1));
        print '<span>' . str_repeat('&nbsp;', 32) . '</span>';
        echo number_format((float)$total4, 2, '.', '');
        print '<span>' . str_repeat('&nbsp;', 30) . '</span>';

    }else{
        $total4withoutdisc=0;
        $total4=0;}
    if($quantity_item5 > 0){
        echo "<br> Item No ".$products[4]['item_no'];
        echo "<br>".$products[4]['description'];
        print '<span>' . str_repeat('&nbsp;', 30) . '</span>';
        echo number_format((float)$products[4]['price'],2)." x ".$quantity_item5;
        print '<span>' . str_repeat('&nbsp;', 20) . '</span>';
        $proddiscount= ($products[4]['price'] * $quantity_item5 * $products[4]['discount']);
        echo number_format((float)$proddiscount, 2, '.', '');
        $total5withoutdisc= ($products[4]['price'] * $quantity_item5);
        $total5 = ($products[4]['price'] * $quantity_item5 - round($proddiscount, 1));
        print '<span>' . str_repeat('&nbsp;', 33) . '</span>';
        echo number_format((float)$total5, 2, '.', '');
        print '<span>' . str_repeat('&nbsp;', 30) . '</span>';


    } else{
        $total5=0;
        $total5withoutdisc=0;}
    if($quantity_item6 > 0){
        echo "<br> Item No ".$products[5]['item_no'];
        echo "<br>".$products[5]['description'];
        print '<span>' . str_repeat('&nbsp;', 25) . '</span>';
        echo number_format((float)$products[5]['price'],2)." x ".$quantity_item6;
        print '<span>' . str_repeat('&nbsp;', 20) . '</span>';
        $proddiscount= ($products[5]['price'] * $quantity_item6 * $products[5]['discount']);
        echo number_format((float)$proddiscount, 2, '.', '');
        $total6withoutdisc= ($products[5]['price'] * $quantity_item6);
        $total6 = ($products[5]['price'] * $quantity_item6 - round($proddiscount, 1));
        print '<span>' . str_repeat('&nbsp;', 30) . '</span>';
        echo number_format((float)$total6, 2, '.', '');
        print '<span>' . str_repeat('&nbsp;', 30) . '</span>';

    } else{
        $total6=0;
        $total6withoutdisc=0;}
    if($quantity_item7 > 0){
        echo "<br> Item No ".$products[6]['item_no'];
        echo "<br>".$products[6]['description'];
        print '<span>' . str_repeat('&nbsp;', 25) . '</span>';
        echo number_format((float)$products[6]['price'],2)." x ".$quantity_item7;
        print '<span>' . str_repeat('&nbsp;', 20) . '</span>';
        $proddiscount= ($products[6]['price'] * $quantity_item7 * $products[6]['discount']);
        echo number_format((float)$proddiscount, 2, '.', '');
        $total7withoutdisc= ($products[6]['price'] * $quantity_item7);
        $total7 = ($products[6]['price'] * $quantity_item7 - round($proddiscount, 1));
        print '<span>' . str_repeat('&nbsp;', 30) . '</span>';
        echo number_format((float)$total7, 2, '.', '');
        print '<span>' . str_repeat('&nbsp;', 30) . '</span>';

    } else{
        $total7=0;
        $total7withoutdisc=0;}
    if($quantity_item8 > 0){
        echo "<br> Item No ".$products[7]['item_no'];
        echo "<br>".$products[7]['description'];
        print '<span>' . str_repeat('&nbsp;', 25) . '</span>';
        echo number_format((float)$products[7]['price'],2)." x ".$quantity_item8;
        print '<span>' . str_repeat('&nbsp;', 13) . '</span>';
        $proddiscount= ($products[7]['price'] * $quantity_item8 * $products[7]['discount']);
        echo number_format((float)$proddiscount, 2, '.', '');
        $total8withoutdisc= ($products[7]['price'] * $quantity_item8);
        $total8 = ($products[7]['price'] * $quantity_item8 - round($proddiscount, 1));
        print '<span>' . str_repeat('&nbsp;', 30) . '</span>';
        echo number_format((float)$total8, 2, '.', '');
        print '<span>' . str_repeat('&nbsp;', 30) . '</span>';

    } else{
        $total8=0;
        $total8withoutdisc=0;}
    if($quantity_item9 > 0){
        echo "<br> Item No ".$products[8]['item_no'];
        echo "<br>".$products[8]['description'];
        print '<span>' . str_repeat('&nbsp;', 25) . '</span>';
        echo number_format((float)$products[8]['price'],2)." x ".$quantity_item9;
        print '<span>' . str_repeat('&nbsp;', 13) . '</span>';
        $proddiscount= ($products[8]['price'] * $quantity_item9 * $products[8]['discount']);
        echo number_format((float)$proddiscount, 2, '.', '');
        $total9withoutdisc= ($products[8]['price'] * $quantity_item9);
        $total9 = ($products[8]['price'] * $quantity_item9 - round($proddiscount, 1));
        print '<span>' . str_repeat('&nbsp;', 30) . '</span>';
        echo number_format((float)$total9, 2, '.', '');
        print '<span>' . str_repeat('&nbsp;', 30) . '</span>';

    } else{
        $total9=0;
        $total9withoutdisc=0;}
    if($quantity_item10 > 0){
        echo "<br> Item No ".$products[9]['item_no'];
        echo "<br>".$products[9]['description'];
        print '<span>' . str_repeat('&nbsp;', 40) . '</span>';
        echo number_format((float)$products[9]['price'],2)." x ".$quantity_item10;
        print '<span>' . str_repeat('&nbsp;', 23) . '</span>';
        $proddiscount= ($products[9]['price'] * $quantity_item10 * $products[9]['discount']);
        echo number_format((float)$proddiscount, 2, '.', '');
        $total10withoutdisc= ($products[9]['price'] * $quantity_item10);
        $total10 = ($products[9]['price'] * $quantity_item10 - round($proddiscount, 1));
        print '<span>' . str_repeat('&nbsp;', 30) . '</span>';
        echo number_format((float)$total10, 2, '.', '');
        print '<span>' . str_repeat('&nbsp;', 30) . '</span>';


        $gstprice = ($total1+$total2+$total3+$total4+$total5+$total6+$total7+$total8+$total9+$total10 * 6)/100;
        echo $gstprice + $total1+$total2+$total3+$total4+$total5+$total6+$total7+$total8+$total9+$total10;

    } else{
        $total10=0;
        $total10withoutdisc=0;}


    echo "<br>......................................................................................................................................................";

    ?>
    <h3>THANK YOU FOR YOUR PURCHASING WITH US !</h3>
    </div>

    </div>
</body>
</html>
