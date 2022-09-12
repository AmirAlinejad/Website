


<?php
	$conn = mysqli_connect("localhost", "root", "", "project");
	
	
	$myusername = mysqli_real_escape_string($conn,$_POST['username']);
	$mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
	
	
	$sql = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	
	$count = mysqli_num_rows($result);
	
	
		
      if($count == 1) {
 
         $_SESSION['login_user'] = $myusername;
         
         header("location: interface.php");
		 
      }
	  else {
			
		header('Refresh: 2.5; url=login_real.php'); 
		echo "<h3> Incorrect password or username.</h3>";
		exit("You'll be direct back to the login page shortly");
      }
	  
	  
	?>


