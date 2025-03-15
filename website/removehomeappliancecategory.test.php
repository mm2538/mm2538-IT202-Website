<?php
/*Michael Makowski, 3/15/24, IT202:006, Phase 2 Assignment, mm2538@njit.edu*/
error_log("\$_POST " . print_r($_POST, true));
include("homeappliancecategory.php");
$HomeApplianceCategoryID = $_POST['HomeApplianceCategoryID'];
$category = Category::findCategory($HomeApplianceCategoryID);
$result = $category->removeCategory();
if ($result)
   echo "<h2>Category $HomeApplianceCategoryID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing category $HomeApplianceCategoryID</h2>\n";
?>
