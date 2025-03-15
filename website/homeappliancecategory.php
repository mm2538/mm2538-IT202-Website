<?php
/*Michael Makowski, 3/15/24, IT202:006, Phase 2 Assignment, mm2538@njit.edu*/
require_once('database.php');
class Category
{
   public $HomeApplianceCategoryID;
   public $HomeApplianceCategoryCode;
   public $HomeApplianceCategoryName;
   public $AisleNumber;
   public $DateCreated;
   function __construct($HomeApplianceCategoryID, $HomeApplianceCategoryCode, $HomeApplianceCategoryName, $AisleNumber, $DateCreated)
   {
       $this->HomeApplianceCategoryID = $HomeApplianceCategoryID;
       $this->HomeApplianceCategoryCode = $HomeApplianceCategoryCode;
       $this->HomeApplianceCategoryName = $HomeApplianceCategoryName;
       $this->AisleNumber = $AisleNumber;
       $this->DateCreated = $DateCreated;
   }
   function __toString()
   {
       $output = "<h2>Category Number: $this->HomeApplianceCategoryID</h2>\n" .
           "<h2>$this->HomeApplianceCategoryCode, $this->HomeApplianceCategoryName</h2>\n";
       return $output;
   }
   function saveCategory()
   {
       $db = getDB();
       $query = "INSERT INTO HomeApplianceCategories VALUES (?, ?, ?, ?, ?)";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "issis",
           $this->HomeApplianceCategoryID,
           $this->HomeApplianceCategoryCode,
           $this->HomeApplianceCategoryName,
           $this->AisleNumber,
           $this->DateCreated
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
   static function getCategories()
   {
       $db = getDB();
       $query = "SELECT * FROM HomeApplianceCategories";
       $result = $db->query($query);
       if (mysqli_num_rows($result) > 0) {
           $categories = array();
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $category = new Category(
                   $row['HomeApplianceCategoryID'],
                   $row['HomeApplianceCategoryCode'],
                   $row['HomeApplianceCategoryName'],
                   $row['AisleNumber'],
                   $row['DateCreated']
               );
               array_push($categories, $category);
               unset($category);
           }
           $db->close();
           return $categories;
       } else {
           $db->close();
           return NULL;
       }
   }
   static function findCategory($HomeApplianceCategoryID)
   {
       $db = getDB();
       $query = "SELECT * FROM HomeApplianceCategories WHERE HomeApplianceCategoryID = $HomeApplianceCategoryID";
       $result = $db->query($query);
       $row = $result->fetch_array(MYSQLI_ASSOC);
       if ($row) {
           $category = new Category(
               $row['HomeApplianceCategoryID'],
               $row['HomeApplianceCategoryCode'],
               $row['HomeApplianceCategoryName'],
               $row['AisleNumber'],
               $row['DateCreated']
           );
           $db->close();
           return $category;
       } else {
           $db->close();
           return NULL;
       }
   }
   function updateCategory()
   {
       $db = getDB();
       $query = "UPDATE HomeApplianceCategories SET HomeApplianceCategoryID = ?, HomeApplianceCategoryCode = ?, " .
           "HomeApplianceCategoryName = ?, " . "AisleNumber = ?, " . "DateCreated = ? " .
           "WHERE HomeApplianceCategoryID = $this->HomeApplianceCategoryID";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "issis",
           $this->HomeApplianceCategoryID,
           $this->HomeApplianceCategoryCode,
           $this->HomeApplianceCategoryName,
           $this->AisleNumber,
           $this->DateCreated
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
   function removeCategory()
   {
       $db = getDB();
       $query = "DELETE FROM HomeApplianceCategories WHERE HomeApplianceCategoryID = $this->HomeApplianceCategoryID";
       $result = $db->query($query);
       $db->close();
       return $result;
   }
}
?>
