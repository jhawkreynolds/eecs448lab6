<?php

echo "<link href='style.css' rel='stylesheet' type='text/css'/>";

error_reporting(E_ALL); 
ini_set("display_errors", 1);

$username = $_POST["username"];
$password = $_POST["password"];
echo "<p>" . $username . "</p>";
echo "<p>" . $password . "</p>";

echo "<h2>Welcome back, " . $username . "!</h2>";
echo "<p>Thank you for your purchase!</p>";

echo "<h1>Receipt</h1>";

$price_chess = 29.95;
$price_fryer = 13;
$price_piano = 42000;
$price_socks = 9.99;

$amount_chess = $_POST["chessset"];
$amount_fryer = $_POST["airfryer"];
$amount_piano = $_POST["grandpiano"];
$amount_socks = $_POST["fuzzysocks"];

$shipping_rate = $_POST["shipping"];
$shipping_option = "";
if($shipping_rate == 0)
{
    $shipping_option = "OVERNIGHT";
}
elseif($shipping_rate == 5)
{
    $shipping_option = "EXPRESS 3-DAY";
}
else
{
    $shipping_option = "FREE 7-DAY";
}

$total_chess = $price_chess * $amount_chess;
$total_fryer = $price_fryer * $amount_fryer;
$total_piano = $price_piano * $amount_piano;
$total_socks = $price_socks * $amount_socks;

$sub_total = $total_chess + $total_fryer + $total_piano + $total_socks;

$final_total = $sub_total + $shipping_rate;

echo "<table>";
    //header
    echo "<tr>";
        echo "<th></th>";
        echo "<th>Quantity</th>";
        echo "<th>Cost Per Item</th>";
        echo "<th>Sub Total</th>";
    echo "</tr>";
    //chess
    echo "<tr>";
        echo "<th>Chess Set</th>";
        echo "<td>" . $amount_chess . "</td>";
        echo "<td>" . $price_chess . "</td>";
        echo "<td>" . $total_chess . "</td>";
    echo "</tr>";
    //fryer
    echo "<tr>";
        echo "<th>Air Fryer</th>";
        echo "<td>" . $amount_fryer . "</td>";
        echo "<td>" . $price_fryer . "</td>";
        echo "<td>" . $total_fryer . "</td>";
    echo "</tr>";
    //piano
    echo "<tr>";
        echo "<th>Grand Piano</th>";
        echo "<td>" . $amount_piano . "</td>";
        echo "<td>" . $price_piano . "</td>";
        echo "<td>" . $total_piano . "</td>";
    echo "</tr>";
    //socks
    echo "<tr>";
        echo "<th>Fuzzy Socks</th>";
        echo "<td>" . $amount_socks . "</td>";
        echo "<td>" . $price_socks . "</td>";
        echo "<td>" . $total_socks . "</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<th>Shipping</th>";
        echo "<td colspan='2'>" . $shipping_option . "</td>";
        echo "<td>" . $shipping_rate . "</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<th colspan='3'>Final Cost</th>";
        echo "<td>" . $final_total . "</td>";
    echo "</tr>";
echo "</table>";

?>