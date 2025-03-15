<?php
/*Michael Makowski, 3/15/24, IT202:006, Phase 2 Assignment, mm2538@njit.edu*/
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Inventory Helper</title></head>
<body>
   <section id="container">
       <main>
           <?php
           if (isset($_REQUEST['content'])) {
               include($_REQUEST['content'] . ".inc.php");
           } else {
               include("main.inc.php");
           }
           ?>
       </main>
   </section>
</body>
</html>