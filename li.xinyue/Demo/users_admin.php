<?php

include "../lib/php/functions.php";

$users = file_get_json("users.json");






function showUserPage($user) {



$classes = implode(", ", $user->classes);

echo <<<HTML
<nav class="nav crumbs">
   <ul>
      <li><a href="{$_SERVER['PHP_SELF']}">Back</a></li>
   </ul>
</nav>
<div>
   <h2>$user->name</h2>
   <div>
      <strong>Type</strong>
      <span>$user->type</span>
   </div>
   <div>
      <strong>Email</strong>
      <span>$user->email</span>
   </div>
   <div>
      <strong>Classes</strong>
      <span>$classes</span>
   </div>
</div>
HTML;
}





?><!DOCTYPE html>
<html lang="en">
<head>
   <title>User Administrator</title>

   <?php include "../Parts/meta.php"; ?>
</head>
<body>

   <header class="navbar">
      <div class="container display-flex">
         <div class="flex-none">
            <h1>Users Admin</h1>
         </div>
         <div class="flex-stretch"></div>
         <!-- nav.nav.flex-none>ul>li>a[href=#]>{List} -->
         <nav class="nav flex-none">
            <ul>
               <li><a href="<?= $_SERVER['PHP_SELF'] ?>">List</a></li>

            </ul>

         </nav>
      </div>
   </header>

   <div class="container">

      <div class="card soft">
         <?php


         if(isset($_GET['id'])) {

            showUserPage($users[$_GET['id']]);
            // TODO(lpp): remove submit form.
            // add delete button to add &delete url param.

            echo "
            <a href='{$_SERVER['PHP_SELF']}?id={$_GET['id']}&delete=1'> Delete </a>
            ";


            if(isset($_GET['delete'])) {
           
               // TODO: read json and delet by the given name.
               echo "Successfully deleted";


               $file_name = 'users.json'; 
       
               $data = file_get_json($file_name);
               // Delete user from json with the given id.
               // unset($data[$_GET['id']]);
               // $data = array_values($data);
               $data = delete_from_array_by_index($data, $_GET['id']);
               // print_r($data);
               file_put_contents($file_name, json_encode($data, JSON_PRETTY_PRINT));
            
            }


         } else {

         ?>

         <h2 class = "Users" >User List</h2>

         <ul>
         <?php

         for($i=0; $i<count($users); $i++) {
            echo "<li>
            <a href='{$_SERVER['PHP_SELF']}?id=$i'>{$users[$i]->name}</a>
            </li>";
         }
            echo <<<HTML
             <button class="add_users"><a href="./Demo/add.php">add</a></button>
             HTML;

         ?>

         </ul>

         <?php }  ?>
        

      </div>

   


</div>

</body>
</html>