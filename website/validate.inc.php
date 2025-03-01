<?php
/*Michael Makowski, 2/28/24, IT202:006, Phase 1 Assignment, mm2538@njit.edu*/
require_once('database.php');
$emailAddress = $_POST['emailAddress'];
$password = $_POST['password'];
$query = "SELECT firstName, lastName, pronouns FROM HomeAppliancesManagers " .
        "WHERE emailAddress = ? AND password = SHA2(?,256)";
$db = getDB();
$stmt = $db->prepare($query);
$stmt->bind_param("ss", $emailAddress, $password);
$stmt->execute();
$stmt->bind_result($firstName, $lastName, $pronouns);
$fetched = $stmt->fetch();
$name = "$firstName $lastName";
if ($fetched && isset($name)) {
   echo "<h2>Welcome to Inventory, $name, $pronouns</h2>\n";
   $_SESSION['login'] = $name;
   $_SESSION['emailAddress'] = $emailAddress;
   $_SESSION['firstName'] = $firstName;
   $_SESSION['lastName'] = $lastName;
   $_SESSION['pronouns'] = $pronouns;
   header("Location: index.php");
} else {
   echo "<h2>Sorry, login incorrect</h2>\n";
   echo "<a href=\"index.php\">You have failed to login to the Home Appliances store, please try again</a>\n";
}
?>
