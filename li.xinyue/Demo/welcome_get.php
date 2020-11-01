
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
               <li><a href="<?= $_SERVER['PHP_SELF'] ?>">List</a></li>
            </ul>
         </nav>
      </div>
   </header>

   <div class="container">
      <div class="card soft">

Welcome <?php echo $_GET["first"]; ?><br>
Your email address is: <?php echo $_GET["last"]; ?>
</div>
</body>
</html>