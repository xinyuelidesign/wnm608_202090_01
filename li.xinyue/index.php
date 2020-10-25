<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cool Website</title>

   <link rel="stylesheet" href="lib/css/styleguide.css">
   <link rel="stylesheet" href="css/storetheme.css">
</head>
<body>
   
   <!-- header>h1+p -->
   <header class="navbar">
      <div class="container display-flex flex-align-center">
         <div class="flex-none"><h1>Cool Website</h1></div>
         <div class="flex-stretch"></div>
         
         <!-- nav.nav>ul>li*4>a[href=#article$]>{Link $} -->
         <nav class="nav flex-none">
            <ul class="display-flex">
               <li><a href="#article1">Link 1</a></li>
               <li><a href="#article2">Link 2</a></li>
               <li><a href="#article3">Link 3</a></li>
               <li><a href="#article4">Link 4</a></li>
            </ul>
         </nav>
      </div>
   </header>
