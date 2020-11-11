<?php

include_once "lib/php/functions.php";


function makeProductList($r,$o) {
return $r.<<<HTML
<div class="col-xs-12 col-md-4">
   <a href="#">
      <figure class="product-item">
         <div class="product-image">
            <img src="$o->thumbnail" alt="">
         </div>
         <figcaption class="product-description">
            <div class="product-price">&dollar;$o->price</div>
            <div class="product-name">$o->name</div>
         </figcaption>
      </figure>
   </a>
</div>
HTML;
}



?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Product List</title>

   <?php include "Parts/meta.php" ?>
</head>
<body>
   
   <?php include "Parts/navbar.php" ?>

   <div class="container">
      <div class="card soft">
         <h2>Product List</h2>

         <div class="grid gap">
           
            <?php

            echo array_reduce(
               MYSQLIQuery("SELECT * FROM Products"),
               'makeProductList'
            );

            ?>
         </div>
      </div>
   </div>

</body>
</html>