<?php
		
	
		// servername => localhost
		// username => root
		// password => empty
		// database name => project
		
		$conn = mysqli_connect("localhost", "root", "", "project");
		
		
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		//Taking all 3 values from the form data(input)
		$name = $_REQUEST['business'];
		$email = $_REQUEST['email'];
		$model = $_REQUEST['model'];
		$details = $_REQUEST['details'];
		
		if((strlen($name) < 1) || empty($name) || (strlen($name) > 49)){
			header('Refresh: 2.5; url=contact.php'); 
			echo "<h3> Invalid username</h3>";
			exit("You'll be direct back to the form page shortly");
			//sleep(2);
			//header("location: contact.php");
		}
		else if((strlen($model) < 1) || empty($model)|| (strlen($name) > 49)){
			header('Refresh: 2.5; url=contact.php'); 
			echo "<h3> Invalid password</h3>";
			exit("You'll be direct back to the form page shortly");
			//sleep(2);
			//header("location: contact.php");
		}
		else if((strlen($details) < 1) || empty($details)|| (strlen($details) > 249)){
			header('Refresh: 2.5; url=contact.php'); 
			echo "<h3> Invalid password</h3>";
			exit("You'll be direct back to the form page shortly");
			//sleep(2);
			//header("location: contact.php");
		}
		else if ((filter_var($email, FILTER_VALIDATE_EMAIL) != true)|| (strlen($email) > 49)){
			header('Refresh: 2.5; url=contact.php'); 
			echo "<h3>Invalid email</h3>";
			exit("You'll be direct back to the form page shortly");
			//header("location: contact.php");
		}
		else{
		
		$sql3 = "INSERT INTO orders (bus_name, email, model, details)
			VALUES('$name','$email','$model', '$details')";
			
		}
			
			
			
			
		if(mysqli_query($conn, $sql3)){
			header('Refresh: 2.5; url=interface.php'); 
			echo "<h3> You're order has been placed!</h3>";
			exit("You'll be direct back to the login page shortly");
			//displays on screen when information inputed to database
		}
		 else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		mysqli_close($conn);
		
?>