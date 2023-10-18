<?php
   include "sections/header.php" ;

   if(isset($_GET["page"])){
      include $_GET["page"].".php" ;
   }else{

   }

   include "sections/footer.php"
?>