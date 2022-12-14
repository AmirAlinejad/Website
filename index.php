<!DOCTYPE html>
<html lang="en">
   <head>
		<link rel="icon" href="car.jpg">
		
      <title>Airbag Module Repair</title>
	  
	  <style>
	  
	  body {
		  content: "";
		  top: 0px;
		  right: 0px;
		  bottom: 0px;
		  left: 0px;
		  position: "absolute";
		  background-color: lightblue;
		  opacity: 1;
		  background-size:cover;
		  background-position: top center;
	}
	  .button {
		  display: inline-block;
		  border-radius: 4px;
		  background-color: #f4511e;
		  border: none;
		  color: #FFFFFF;
		  text-align: center;
		  font-size: 14px;
		  padding: 20px;
		  width: 100px;
		  transition: all 0.5s;
		  cursor: pointer;
		  margin: 5px;
		}

		.button span {
		  cursor: pointer;
		  display: inline-block;
		  position: relative;
		  transition: 0.5s;
		}

		.button span:after {
		  content: '\00bb';
		  position: absolute;
		  opacity: 0;
		  top: 0;
		  right: -20px;
		  transition: 0.5s;
		}

		.button:hover span {
		  padding-right: 25px;
		}

		.button:hover span:after {
		  opacity: 1;
		  right: 0;
		}
		   *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
body{
  min-height: 100vh;
  width: 100%;
  background: #c8e8e9;
  display: flex;
  align-items: center;
  justify-content: center;
}
.container{
  width: 85%;
  background: #fff;
  border-radius: 6px;
  padding: 20px 60px 30px 40px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.container .content{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.container .content .left-side{
  width: 25%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
  position: relative;
}
.content .left-side::before{
  content: '';
  position: absolute;
  height: 70%;
  width: 2px;
  right: -15px;
  top: 50%;
  transform: translateY(-50%);
  background: #afafb6;
}
.content .left-side .details{
  margin: 14px;
  text-align: center;
}
.content .left-side .details i{
  font-size: 30px;
  color: #3e2093;
  margin-bottom: 10px;
}
.content .left-side .details .topic{
  font-size: 18px;
  font-weight: 500;
}
.content .left-side .details .text-one,
.content .left-side .details .text-two{
  font-size: 14px;
  color: #afafb6;
}
.container .content .right-side{
  width: 75%;
  margin-left: 75px;
}
.content .right-side .topic-text{
  font-size: 23px;
  font-weight: 600;
  color: #3e2093;
}
.right-side .input-box{
  height: 75px;
  width: 100%;
  margin: 90px 0;
}
.right-side .input-box input,
.right-side .input-box textarea{
  height: 100%;
  width: 100%;
  border: none;
  outline: none;
  font-size: 16px;
  background: #F0F1F8;
  border-radius: 6px;
  padding: 0 15px;
  resize: none;
}
.right-side .message-box{
  min-height: 110px;
}
.right-side .input-box textarea{
  padding-top: 6px;
}
.right-side .button{
  display: inline-block;
  margin-top: 12px;
}
.right-side .button input[type="button"]{
  color: #fff;
  font-size: 18px;
  outline: none;
  border: none;
  padding: 8px 16px;
  border-radius: 6px;
  background: #3e2093;
  cursor: pointer;
  transition: all 0.3s ease;
}
.button input[type="button"]:hover{
  background: #5029bc;
}

@media (max-width: 950px) {
  .container{
    width: 90%;
    padding: 30px 40px 40px 35px ;
  }
  .container .content .right-side{
   width: 75%;
   margin-left: 55px;
}
}
@media (max-width: 820px) {
  .container{
    margin: 40px 0;
    height: 100%;
  }
  .container .content{
    flex-direction: column-reverse;
  }
 .container .content .left-side{
   width: 100%;
   flex-direction: row;
   margin-top: 40px;
   justify-content: center;
   flex-wrap: wrap;
 }
 .container .content .left-side::before{
   display: none;
 }
 .container .content .right-side{
   width: 100%;
   margin-left: 0;
 }
}
  
	
	  
	  </style>

   </head>
   <body>
   <div class="container">
   
   
      <center>
	  
         <h1>Sign Up Page</h1>
         <form action="insert.php" method="post">
		 <div class="right-side">
             
<p>

		<div class="input-box">
               <label for="username">Username:</label>
               <input type="text" name="username" id="username" placeholder="username">
			   
			   </div>
            </p>
		
 
             
<p>
	<div class="input-box">
               <label for="password"> Password: </label>
               <input type="text" name="password" id="password" placeholder="password">
			  </div>
            </p>
 
                
<p>
			<div class="input-box">
               <label for="emailAddress">Email Address:</label>
               <input type="text" name="email" id="emailAddress" placeholder="email address">
			   </div>
            </p>
			
			
			
			
			
			<button class="button" style="vertical-align:middle"><span>Create Account </span></button>
            <!-- <input type="submit" value="Create Account"> -->
			<br> </br>
         </form>
		 
		 <form action="login_real.php" method="post">
            
            <!-- <input type="submit" value="Login Page"> -->
			<button class="button" style="vertical-align:middle"><span>Go to Login </span></button>
			
			
         </form>
		</div>
		</div>
      </center>
   </body>
</html>