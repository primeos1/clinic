<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<?php
session_start();
include('../connect.php');
$a = $_POST['code'];
$b = $_POST['name'];
$c = $_POST['exdate'];

$e = $_POST['supplier'];
$f = $_POST['qty'];

$i = $_POST['gen'];
$j = $_POST['date_arrival'];
$k = $_POST['qty_sold'];

// query
$sql = "INSERT INTO products (product_code,product_name,expiry_date,supplier,qty,gen_name,date_arrival,qty_sold) VALUES (:a,:b,:c,:e,:f,:i,:j,:k)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':e'=>$e,':f'=>$f,':i'=>$i,':j'=>$j,':k'=>$k));
header("location: products.php");


?>