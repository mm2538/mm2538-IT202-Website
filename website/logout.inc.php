<?php
/*Michael Makowski, 2/28/24, IT202:006, Phase 1 Assignment, mm2538@njit.edu*/
if (isset($_SESSION['login'])) {
   unset($_SESSION['login']);
}
if (isset($_SESSION['emailAddress'])) {
    unset($_SESSION['emailAddress']);
}
if (isset($_SESSION['firstName'])) {
    unset($_SESSION['firstName']);
}
if (isset($_SESSION['lastName'])) {
    unset($_SESSION['lastName']);
}
if (isset($_SESSION['pronouns'])) {
    unset($_SESSION['pronouns']);
}
header("Location: index.php");
?>
