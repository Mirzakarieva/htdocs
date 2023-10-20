<?php
   include "sections/header.php" ;

   if(isset($_GET["page"])){
      include $_GET["page"].".php" ;
   }else{
      include "home.php" ;
   }

   include "sections/footer.php"
?>