<?php
$currency = '$'; //Currency Character or code

$server = 'us-cdbr-iron-east-03.cleardb.net';
$username = 'bb322e8bfccea9';
$password = '245af7a1';
$db = 'heroku_4314e8da0b6f03d';

$shipping_cost      = 1.50; //shipping cost
$taxes              = array( //List your Taxes percent here.
                            'VAT' => 12, 
                            'Service Tax' => 5
                            );                      
//connect to MySql                      
$mysqli = new mysqli($server, $username, $password, $db);

if ($mysqli->connect_error) {
    echo "error";
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
?>