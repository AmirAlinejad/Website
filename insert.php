<!DOCTYPE html>
<html>

<head>
	<title>Login Page page</title>
</head>

<body>
	<center>
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
		
		// Taking all 3 values from the form data(input)
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		
		//checking if username is taken or not
		$myusername = mysqli_real_escape_string($conn,$_POST['username']);
		$myemail = mysqli_real_escape_string($conn,$_POST['email']);
		$sql = "SELECT id FROM users WHERE username = '$myusername'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$count = mysqli_num_rows($result);
		
		$myemail = mysqli_real_escape_string($conn,$_POST['email']);
		$sqle = "SELECT id FROM users WHERE email = '$myemail'";
		$resulte = mysqli_query($conn,$sqle);
		$rowe = mysqli_fetch_array($resulte,MYSQLI_ASSOC);
		$counte = mysqli_num_rows($resulte);
		
		
		
		// Performing insert query execution
		// here our table name is users
		
		//conditionals to see if input for login verifcation are valid or not
		if((strlen($username) < 1) || empty($username) ||  (strlen($username) > 29)){
			header('Refresh: 2.5; url=index.php'); 
			echo "<h3> Invalid username</h3>";
			exit("You'll be direct back to the SignUp page shortly");
			//sleep(2);
			//header("location: index.php");
		}
		else if((strlen($password) < 1) || empty($password) || (strlen($password) > 29)){
			header('Refresh: 2.5; url=index.php'); 
			echo "<h3> Invalid password</h3>";
			exit("You'll be direct back to the SignUp page shortly");
			//sleep(2);
			//header("location: index.php");
		}
		else if (filter_var($email, FILTER_VALIDATE_EMAIL) != true){
			header('Refresh: 2.5; url=index.php'); 
			echo "<h3>Invalid email</h3>";
			exit("You'll be direct back to the SignUp page shortly");
			//header("location: index.php");
		}
		else if($count == 1) {
			header('Refresh: 2.5; url=index.php'); 
			echo "<h3> Username is taken already sorry!</h3>";
			exit("You'll be direct back to the SignUp page shortly");			 
		  }
		 else if($counte == 1) {
			header('Refresh: 2.5; url=index.php'); 
			echo "<h3> Email is already in use sorry!</h3>";
			exit("You'll be direct back to the SignUp page shortly");			 
		  }
		else{
			$sql = "INSERT INTO users (username, email, password)
			VALUES('$username','$email','$password')";
		}
		
		if(mysqli_query($conn, $sql)){
			header('Refresh: 2.5; url=login_real.php'); 
			echo "<h3> You have signed up sucessfully!</h3>";
			exit("You'll be direct back to the login page shortly");
			//displays on screen when information inputed to database
		}
		 else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
		<form action="index.php" method="post">
				<input type="submit" value="Login">
		
			 
		</form>
	</center>
</body>

</html>
