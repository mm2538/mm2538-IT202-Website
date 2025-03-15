<?php
/*Michael Makowski, 3/15/24, IT202:006, Phase 2 Assignment, mm2538@njit.edu*/
include("homeapplianceproduct.php");
$HomeApplianceProductID = $_POST['HomeApplianceProductID'];
$category = Category::findCategory($HomeApplianceProductID);
$category->HomeApplianceProductID = $_POST['HomeApplianceProductID'];
$category->HomeApplianceProductCode = $_POST['HomeApplianceProductCode'];
$category->HomeApplianceProductName = $_POST['HomeApplianceProductName'];
$category->HomeApplianceDescription = $_POST['HomeApplianceDescription'];
$category->OnSale = $_POST['OnSale'];
$category->HomeApplianceCategoryID = $_POST['HomeApplianceCategoryID'];
$category->HomeApplianceWholesalePrice = $_POST['HomeApplianceWholesalePrice'];
$category->HomeApplianceListPrice = $_POST['HomeApplianceListPrice'];
$category->DateCreated = $_POST['DateCreated'];
$result = $category->updateCategory();
if ($result) {
   echo "<h2>Category $HomeApplianceProductID updated</h2>\n";
} else {
   echo "<h2>Problem updating category $HomeApplianceProductID</h2>\n";
}
?>
