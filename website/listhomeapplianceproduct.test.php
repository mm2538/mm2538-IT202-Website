<?php
/*Michael Makowski, 3/15/24, IT202:006, Phase 2 Assignment, mm2538@njit.edu*/
include("homeapplianceproduct.php");
$categories = Category::getCategories();
foreach($categories as $category) {
   $HomeApplianceProductID = $category->HomeApplianceProductID;
   $name = $HomeApplianceProductID . " - " . $category->HomeApplianceProductCode . ", " . $category->HomeApplianceProductName . ", " . $category->HomeApplianceListPrice;
   echo "$name<br>";
}
?>
