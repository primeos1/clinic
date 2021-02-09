
<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php

session_start();
include('../connect.php');
$a = $_POST['invoice'];
$b = $_POST['cashier'];
$c = $_POST['date'];
$e= $_POST['qty'];
$d = $_POST['ptype'];
$f = $_POST['due'];
$o = $_POST['ca'];
$cname = $_POST['cname'];
if($d=='credit') {

$sql = "INSERT INTO sales (invoice_number,cashier,date,type,qty,due_date,name,ca) VALUES (:a,:b,:c,:d,:e,:f,:g,:o)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$cname, ':o'=>$o));
header("location: preview.php?invoice=$a");
exit();
}
if($d=='cash') {
$f = $_POST['cash'];
$sql = "INSERT INTO sales (invoice_number,cashier,date,type,qty,due_date,name,ca) VALUES (:a,:b,:c,:d,:e,:f,:g,:o)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$cname,':o'=>$o));
header("location: preview.php?invoice=$a");
exit();
}
// query

session_start();

?>
