<?php
include("homeappliancecategory.php");
$categories = Category::getCategories();
foreach($categories as $category) {
   $categoryID = $category->HomeApplianceCategoryID;
   $name = $categoryID . " - " . $category->HomeApplianceCategoryCode . ", " . $category->HomeApplianceCategoryName;
   echo "$name<br>";
}
?>
