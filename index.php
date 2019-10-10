<html>
	<head>
		<title>Synchronized Token Pattern</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="public/css/bootstrap.min.css">
        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
		  	<h2 align="center">Login</h2>
		  	<form action ='index.php' method='POST' enctype='multipart/form-data'>
		    	<div class="form-group">
		      		<label for="username">Username:</label>
		      		<input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
		    	</div>
		    	<div class="form-group">
		      		<label for="password">Password:</label>
		      		<input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
		    	</div>
		    	<div align="center">
					<button type="submit" class="btn btn-default" id="submit" name="submit">Login</button>
				</div>
		  	</form>
		</div>
	</body>
</html>


<?php
    if(isset($_POST['submit'])) {
      user_login();
    }
?>

<?php
    function user_login()
    {
      	$username = 'admin';
      	$password = '1234';
      	$username_in = $_POST['username'];
      	$password_in = $_POST['password'];
      	if(($username_in == $username)&&($password_in == $password)) {
	       
	        session_start();
	        
	        $sessionID = session_id();
	        setcookie('session_cookie', $sessionID, time() + 3600, '/');
	        $_SESSION['CSRF_Token'] = generate_token();
	        
	        header("Location:addinfo.php");
        	exit;
    	}
    	else{
        	echo "<script> alert('Invalid Credentials, Please try again.') </script>";
	    }
	}
	function generate_token(){
	    return sha1(base64_encode(openssl_random_pseudo_bytes(30)));
	}
?>