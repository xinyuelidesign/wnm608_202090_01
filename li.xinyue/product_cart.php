<?php

include_once "lib/php/functions.php";
include_once "Parts/templates.php";



$cart = getCartItems();

//print_p($cart);



?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Product Cart</title>

   <?php include "Parts/meta.php" ?>
</head>
<body>
   
   <?php include "Parts/navbar.php" ?>


   <div class="container">
      <div class="grid gap">
         <div class="col-xs-12 col-md-8">
            <div class="card soft">
               <h2>Product Cart</h2>
               <?

               echo array_reduce($cart,'makeCartList');

               ?>
            </div>
         </div>
         <div class="col-xs-12 col-md-4">
            <div class="cardsoftflat">
               <div class="card-section">
                  <h2>Totals</h2>
               </div>
               <?= cartTotals() ?>
               
            </div>
         </div>
      </div>
   </div>

</body>
</html>