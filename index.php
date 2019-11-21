<?php
require_once 'app/start.php';
use app\controllers\Controller as Controller;
use master\customers\Customer as Customer ;

echo "<br/>";
$controller = new Controller("Carinia","Elnozha","12121");
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


$faiq = new Customer("faiq");
echo "<br/>"."1.Faiq is interested in Basic Inspection "."<br/>";
$faiq->intersted($arr = [1]);
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";




$Ehsaan = new Customer("Ehsaan");
echo "<br/>"."2.Eshaan is interested in carrying out Oil Change"."<br/>";
$Ehsaan->intersted($arr = [2]);
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

$Aliu = new Customer("Aliu");
echo "<br/>"."3.Aliu is interested in carrying out Tire Rotation"."<br/>";
$Aliu->intersted($arr = [3]);

echo "<br/>";
echo "<br/>";
echo "<br/>";


echo "<br/>"."4.Faiq also enquired about the total cost of performing Oil Change and Tire rotation together on the same car"."<br/>";
$faiq->enquired($arr=[2,3]);
?>
