<?php
/*Michael Makowski, 3/15/24, IT202:006, phase 2 Assignment, mm2538@njit.edu*/
include("homeappliancecategory.php");
$HomeApplianceCategoryID = $_POST['HomeApplianceCategoryID'];
$category = Category::findCategory($HomeApplianceCategoryID);
$category->HomeApplianceCategoryID = $_POST['HomeApplianceCategoryID'];
$category->HomeApplianceCategoryCode = $_POST['HomeApplianceCategoryCode'];
$category->HomeApplianceCategoryName = $_POST['HomeApplianceCategoryName'];
$category->AisleNumber = $_POST['AisleNumber'];
$category->DateCreated = $_POST['DateCreated'];
$result = $category->updateCategory();
if ($result) {
   echo "<h2>Category $HomeApplianceCategoryID updated</h2>\n";
} else {
   echo "<h2>Problem updating category $HomeApplianceCategoryID</h2>\n";
}
?>
