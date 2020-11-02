
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
	 Name <?php echo $_GET["name"]; ?><br>
	  Type: <?php echo $_GET["type"]; ?><br>
	  Email: <?php echo $_GET["email"]; ?><br>
	  Classes: <?php echo $_GET["classes"]; ?>



   <?php 
         
        function get_data() { 
            $datae = array(); 
            $datae[] = array( 
                'name' => $_GET['name'], 
                'type' => $_GET['type'],
                'email' => $_GET['email'],
                'classes' => array($_GET['classes']),
            ); 
            return $datae; 
        } 
          
        $file_name = 'users.json'; 
       
        $json = file_get_contents($file_name);
		$data = json_decode($json);
		$data = array_merge($data, get_data());
		// print_r($data);
		file_put_contents($file_name, json_encode($data, JSON_PRETTY_PRINT));
   
?> 

</div>
</body>
</html>