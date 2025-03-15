<?php
/*Michael Makowski, 3/15/24, IT202:006, phase 2 Assignment, mm2538@njit.edu*/
include("homeappliancecategory.php");
$categories = Category::getCategories();
foreach($categories as $category) {
   $categoryID = $category->HomeApplianceCategoryID;
   $name = $categoryID . " - " . $category->HomeApplianceCategoryCode . ", " . $category->HomeApplianceCategoryName;
   echo "$name<br>";
}
?>
