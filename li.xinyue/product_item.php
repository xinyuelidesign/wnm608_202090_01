
<?php 
include_once "lib/php/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>

   <?php include "Parts/meta.php" ?>

   
   <?php include "Parts/navbar.php" ?>


   <div class="container">
      <div class="card soft">
         <h2>Product Item</h2>

         <?php
         echo array_reduce(
               MYSQLIQuery("SELECT * FROM Products WHERE id = {$_GET ['id']}"),
               function($r,$o) {
                  return $r . "<li><a href = 'product_item.php?id=$o->id'>$o->price</li>";
               }
            );
         ?>

         <div>This is the product #<?= $_GET['id'] ?></div>
      </div>
   </div>

 
  
</html>