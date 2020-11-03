
<!DOCTYPE html>
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
               <li><a href="http://xinyuelidesign.com/AAU/wnm608/li.xinyue/Demo/users_admin.php">List</a></li>
            </ul>
         </nav>
      </div>
   </header>

   
   <!--find from w3school-->
   <div class="container">
      <div class="card soft">
	 <form action="./Demo/welcome_get.php" method="get">
Name: <input type="text" name="name"><br>
Type: <input type="text" name="type"><br>
Email: <input type="text" name="email"><br>
Classes: <input type="text" name="classes"><br>
<input type="submit">
</form>


</div>
</body>
</html>