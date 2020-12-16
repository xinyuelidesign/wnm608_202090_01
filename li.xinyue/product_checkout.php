<?php

include_once "lib/php/functions.php";


?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Product Checkout</title>

   <?php include "Parts/meta.php" ?>
</head>
<body>


   <div class="container">
      <div class="card soft">
         <h2>Product Checkout</h2>

         <a href="index.php">Cancel</a>

         <div class="card hard">
        <h4> Fill in your information </h4>
            <div class="display-flex flex-align-center">
               <div class="flex-none">
                  <label for="example-search" class="form-label">Name</label>
               </div>
               <div class="flex-stretch">
                  <input id="example-search" type="search" placeholder="name" class="form-input">
               </div>
               <div class="flex-none">
                  <label for="example-search" class="form-label">Phone</label>
               </div>
               <div class="flex-stretch">
                  <input id="example-search" type="search" placeholder="phone" class="form-input">
               </div>
               <div class="flex-none">
                  <label for="example-search" class="form-label">Email</label>
               </div>
               <div class="flex-stretch">
                  <input id="example-search" type="search" placeholder="email" class="form-input">
               </div>
      </div>
         <div class="form-control">
               <label for="example-1" class="form-label">Address</label>
               <input id="example-1" type="text" placeholder="Line 1" class="form-input">
         </div>
         <div class="flex-stretch">
                  <input id="example-search" type="search" placeholder="line 2" class="form-input">
               </div>
      </div>
      <div class="card medium">
         <h4>Payment Methods</h4>
         <div class="form-control">
            <input type="checkbox" id="check-example">
            <label for="check-example">Paypal</label>
         </div>
         <div class="form-control">
            <input type="checkbox" id="check-example">
            <label for="check-example">Credit/Debit card</label>
         </div>
      </div>

   <div><a href="product_actions.php?action=reset-cart">Pay</a></div>
      </div>

         </div>
</body>
</html>