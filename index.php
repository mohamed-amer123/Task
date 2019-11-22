<?php
include 'app/start.php';

$shop = new CarShop("Car Rush","location","010203040");

$inspection = new InspectionService();
$oilChange = new OilChangeService();
$tireRotate = new TireRotationService();

$shop->add_service($inspection);
$shop->add_service($oilChange);
$shop->add_service($tireRotate);
$shop->set_core_service($inspection);

echo "Welcome to (".$shop->get_shop_data("name").")"."</br>";

$faiq = new Customer("Faiq");
$eshaan = new Customer("Eshaan");
$aliu = new Customer("Aliu");

$shopService = new CarShopService($shop);

echo "</br>"."1. Faiq is interested in Basic Inspection"."</br>".$shopService->interested(array($inspection->get_name()))." $"."</br>";
echo "</br>"."2. Eshaan is interested in carrying out Oil Change"."</br>".$shopService->interested(array($oilChange->get_name()))." $"."</br>";
echo "</br>"."3. Aliu is interested in carrying out Tire Rotation"."</br>".$shopService->interested(array($tireRotate->get_name()))." $"."</br>";
echo "</br>"."4. Faiq also enquired about the total cost of performing Oil Change and Tire rotation together on the same car"."</br>".$shopService->enquired(array($oilChange->get_name(),$tireRotate->get_name()))." $"."</br>";

?>