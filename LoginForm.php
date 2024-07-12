<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="tsms project";
session_start();

    $data=mysqli_connect($host,$user,$password,$db);
    if($data===false){
        die("connection error");
    }

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $user=$_POST["username"];
        $pass=$_POST["password"];

            // making sure that sql injection does n't work

          //  $user= mysqli_real_escape_string($data,$user);
           // $pass= mysqli_real_escape_string($data,$pass);
        $sql="select * from login where username='".$user."' AND password='".$pass."'
        ";

        $result=mysqli_query($data,$sql);

        $row=mysqli_fetch_array($result);

        if($row["Usertype"]=="user")
        {
                $_SESSION["username"]=$user;
            header("location: /tsms project/uindex main.php");
        }
        elseif($row["Usertype"]=="admin")
        {
            $_SESSION["username"]=$user;
            header("location: /tsms project/index main.php");
        }
        else{
            echo "username or password incorrect";
        }
    
    }
    
    
    ?>
<!DOCTYPE html>

<html lang="en">
	<head>
		<title>Login form </title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link href="//db.onlinewebfonts.com/c/60570a3f64a1fece44ebf71b43617029?family=Segoe+UI" rel="stylesheet" type="text/css"/>
    <link href="//db.onlinewebfonts.com/c/5261d6115c3d635230381ae3a9d4823b?family=Sitka+Heading" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="animate.css">
		<link rel="stylesheet" href="Login style.css">
		   

	

	</head>
	<body>
	<div class="loginBox">
		
		
		<h2>Log In Here</h2>
		<form action="#" method="POST">
			<p>Username</p>
			<input type="text" name = "username" placeholder="Enter Username" required>
			<p>Password</p>
			<input type="password" name = "password" placeholder="Enter Password"required>
			<input type="submit" name = "" value="Sign In">
			
			
		</form>
	</div>

	
	</body>
</html>