<?php
/*Michael Makowski, 3/15/24, IT202:006, phase 2 Assignment, mm2538@njit.edu*/
include("homeappliancecategory.php");
$HomeApplianceCategoryID = $_POST['HomeApplianceCategoryID'];
if ((trim($HomeApplianceCategoryID) == '') or (!is_numeric($HomeApplianceCategoryID))) {
  echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
} else {
  $HomeApplianceCategoryCode = $_POST['HomeApplianceCategoryCode'];
  $HomeApplianceCategoryName = $_POST['HomeApplianceCategoryName'];
  $AisleNumber = $_POST['AisleNumber'];
  $DateCreated = $_POST['DateCreated'];
  $category = new Category($HomeApplianceCategoryID, $HomeApplianceCategoryCode, $HomeApplianceCategoryName, $AisleNumber, $DateCreated);
  $result = $category->saveCategory();
  if ($result) {
      echo "<h2>New Category #$HomeApplianceCategoryID successfully added</h2>\n";
      echo "<h2>$category</h2>\n";
  } else {
      echo "<h2>Sorry, there was a problem adding that category</h2>\n";
  }
}
?>
