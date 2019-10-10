<html>
	<head>
		<title>Adding Info</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
				
		<link rel="stylesheet" href="public/css/bootstrap.min.css">
        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
	</head>

	<body>
		<?php
            if(!isset($_COOKIE['session_cookie'])) {
              	echo "<h3>Couldn't set session correctly. Try login again!!!</h3><br><a href='index.php' class='button'><button type='submit' class='btn btn-warning' id='dsc' name='dsc'> Login </button></a>";
            }
        ?>

        

		<?php
			if(isset($_COOKIE['session_cookie'])) {
              	echo "<div class='container'>
              		<div class='row' align='center' style='padding-top: 100px;'>
			        	<div class='col-12'>
							<div class='card'>
			              		<h3>Add Name</h3>
			              		<div class='card-body'>
			                    	<div class='row'>
			                        <div class='col-sm-2'></div>
			                        	<div class='col-sm-8'>
                        				<form method='post' action='validation.php' enctype='multipart/form-data'>
						              		<input type='hidden' name='csrf_Token' id='csrf_Token' value=''>
						              		<div class='form-group row'>
							                    <label for='name' class='col-sm-2 col-form-label'>Full Name</label>
							                    <div class='col-sm-10'>
							                    	<input type='text' class='form-control' id='name' name='name' placeholder='Name' required>
						                    	</div>
						                    </div>
						                    <div class='form-group row'>

						                    </div>
						                    <button type='submit' class='btn btn-primary' >Submit</button>
                						</form>
        							    </div>
        							</div>
        						</div>
        					</div>
						</div>
						<div class='row' align='center' style='padding-top: 35px;'>
							  <a href='logout.php' class='button'>
							  	<button type='submit' class='btn btn-warning' id='sb' name='sb'> Logout </button>
							  </a>
	              		</div>
        			</div>
        		</div>";
            }
        ?>
      	
      	<script >
        	var request="true";
           	$.ajax({
            	url:"sesh.php",
            	method:"POST",
            	data:{request:request},
            	dataType:"JSON",
            	success:function(data)
            	{
            		document.getElementById("csrf_Token").value=data.token;
            	}
            })
        </script>

	</body>
</html>