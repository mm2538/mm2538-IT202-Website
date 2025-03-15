<?php
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
