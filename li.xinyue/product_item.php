<?php

include_once "lib/php/functions.php";

$product = MYSQLIQuery("SELECT * FROM Products WHERE id = {$_GET['id']}")[0];

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Store: <?= $product->title ?></title>

   <?php include "Parts/meta.php" ?>
</head>
<body>
   
   <?php include "Parts/navbar.php" ?>


   <div class="container">
      <div class="grid gap">
         <div class="col-xs-12 col-md-7">
            <div class="card soft">
               <div class="image-main">
               <div scr="<?= $o->image_thumb ?>" alt="" ></div>
            </div>
            <div class="image-thumbs"></div>
         </div>
      </div>
         <div class="col-xs-12 col-md-5">
            <div class="card soft">
               <h2><?= $product->name ?></h2>
               <div><?= $product->price ?></div>
               <div><a href="added_to_cart.php">Add To Cart</a></div>
            </div>
         </div>
      </div>
   </div>

</body>
</html>