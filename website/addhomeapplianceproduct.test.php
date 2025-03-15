<?php
/*Michael Makowski, 3/15/24, IT202:006, Phase 2 Assignment, mm2538@njit.edu*/
include("homeapplianceproduct.php");
$HomeApplianceProductID = $_POST['HomeApplianceProductID'];
if ((trim($HomeApplianceProductID) == '') or (!is_numeric($HomeApplianceProductID))) {
  echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
} else {
  $HomeApplianceProductCode = $_POST['HomeApplianceProductCode'];
  $HomeApplianceProductName = $_POST['HomeApplianceProductName'];
  $HomeApplianceDescription = $_POST['HomeApplianceDescription'];
  $OnSale = $_POST['OnSale'];
  $HomeApplianceCategoryID = $_POST['HomeApplianceCategoryID'];
  $HomeApplianceWholesalePrice = $_POST['HomeApplianceWholesalePrice'];
  $HomeApplianceListPrice = $_POST['HomeApplianceListPrice'];
  $DateCreated = $_POST['DateCreated'];
  $category = new Category($HomeApplianceProductID, $HomeApplianceProductCode, $HomeApplianceProductName, $HomeApplianceDescription, $OnSale, $HomeApplianceCategoryID, $HomeApplianceWholesalePrice, $HomeApplianceListPrice, $DateCreated);
  $result = $category->saveCategory();
  if ($result) {
      echo "<h2>New Category #$HomeApplianceProductID successfully added</h2>\n";
      echo "<h2>$category</h2>\n";
  } else {
      echo "<h2>Sorry, there was a problem adding that category</h2>\n";
  }
}
?>
