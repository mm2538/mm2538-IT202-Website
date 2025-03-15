<?php
/*Michael Makowski, 3/15/24, IT202:006, Phase 2 Assignment, mm2538@njit.edu*/
require_once('database.php');
class Category
{
   public $HomeApplianceProductID;
   public $HomeApplianceProductCode;
   public $HomeApplianceProductName;
   public $HomeApplianceDescription;
   public $OnSale;
   public $HomeApplianceCategoryID;
   public $HomeApplianceWholesalePrice;
   public $HomeApplianceListPrice;
   public $DateCreated;
   function __construct($HomeApplianceProductID, $HomeApplianceProductCode, $HomeApplianceProductName, $HomeApplianceDescription, $OnSale, $HomeApplianceCategoryID, $HomeApplianceWholesalePrice, $HomeApplianceListPrice, $DateCreated)
   {
       $this->HomeApplianceProductID = $HomeApplianceProductID;
       $this->HomeApplianceProductCode = $HomeApplianceProductCode;
       $this->HomeApplianceProductName = $HomeApplianceProductName;
       $this->HomeApplianceDescription = $HomeApplianceDescription;
       $this->OnSale = $OnSale;
       $this->HomeApplianceCategoryID = $HomeApplianceCategoryID;
       $this->HomeApplianceWholesalePrice = $HomeApplianceWholesalePrice;
       $this->HomeApplianceListPrice = $HomeApplianceListPrice;
       $this->DateCreated = $DateCreated;
   }
   function __toString()
   {
       $output = "<h2>Category Number: $this->HomeApplianceProductID</h2>\n" .
           "<h2>$this->HomeApplianceProductCode, $this->HomeApplianceProductName</h2>\n";
       return $output;
   }
   function saveCategory()
   {
       $db = getDB();
       $query = "INSERT INTO HomeApplianceProducts VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "issssidds",
           $this->HomeApplianceProductID,
           $this->HomeApplianceProductCode,
           $this->HomeApplianceProductName,
           $this->HomeApplianceDescription,
           $this->OnSale,
           $this->HomeApplianceCategoryID,
           $this->HomeApplianceWholesalePrice,
           $this->HomeApplianceListPrice,
           $this->DateCreated
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
   static function getCategories()
   {
       $db = getDB();
       $query = "SELECT * FROM HomeApplianceProducts";
       $result = $db->query($query);
       if (mysqli_num_rows($result) > 0) {
           $categories = array();
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $category = new Category(
                   $row['HomeApplianceProductID'],
                   $row['HomeApplianceProductCode'],
                   $row['HomeApplianceProductName'],
                   $row['HomeApplianceDescription'],
                   $row['OnSale'],
                   $row['HomeApplianceCategoryID'],
                   $row['HomeApplianceWholesalePrice'],
                   $row['HomeApplianceListPrice'],
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
   static function findCategory($HomeApplianceProductID)
   {
       $db = getDB();
       $query = "SELECT * FROM HomeApplianceProducts WHERE HomeApplianceProductID = $HomeApplianceProductID";
       $result = $db->query($query);
       $row = $result->fetch_array(MYSQLI_ASSOC);
       if ($row) {
           $category = new Category(
               $row['HomeApplianceProductID'],
               $row['HomeApplianceProductCode'],
               $row['HomeApplianceProductName'],
               $row['HomeApplianceDescription'],
               $row['OnSale'],
               $row['HomeApplianceCategoryID'],
               $row['HomeApplianceWholesalePrice'],
               $row['HomeApplianceListPrice'],
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
       $query = "UPDATE HomeApplianceProducts SET HomeApplianceProductID = ?, HomeApplianceProductCode = ?, " .
           "HomeApplianceProductName = ?, " . "HomeApplianceDescription = ?, " . "OnSale = ?, " . "HomeApplianceCategoryID = ?, " . "HomeApplianceWholesalePrice = ?, " . "HomeApplianceListPrice = ?, " . "DateCreated = ? " .
           "WHERE HomeApplianceProductID = $this->HomeApplianceProductID";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "issssidds",
           $this->HomeApplianceProductID,
           $this->HomeApplianceProductCode,
           $this->HomeApplianceProductName,
           $this->HomeApplianceDescription,
           $this->OnSale,
           $this->HomeApplianceCategoryID,
           $this->HomeApplianceWholesalePrice,
           $this->HomeApplianceListPrice,
           $this->DateCreated
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
   function removeCategory()
   {
       $db = getDB();
       $query = "DELETE FROM HomeApplianceProducts WHERE HomeApplianceProductID = $this->HomeApplianceProductID";
       $result = $db->query($query);
       $db->close();
       return $result;
   }
}
?>
