<?php
error_log("\$_POST " . print_r($_POST, true));
include("homeapplianceproduct.php");
$HomeApplianceProductID = $_POST['HomeApplianceProductID'];
$category = Category::findCategory($HomeApplianceProductID);
$result = $category->removeCategory();
if ($result)
   echo "<h2>Category $HomeApplianceProductID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing category $HomeApplianceProductID</h2>\n";
?>
