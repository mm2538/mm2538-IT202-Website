<?php
include("homeapplianceproduct.php");
$categories = Category::getCategories();
foreach($categories as $category) {
   $HomeApplianceProductID = $category->HomeApplianceProductID;
   $name = $HomeApplianceProductID . " - " . $category->HomeApplianceProductCode . ", " . $category->HomeApplianceProductName . ", " . $category->HomeApplianceListPrice;
   echo "$name<br>";
}
?>
