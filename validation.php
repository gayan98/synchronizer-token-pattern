<html>
    <head>
        <title>validate</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="public/css/bootstrap.min.css">
        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
    </head>

    <body>
        
      <div class="container">
        <div class='row' align='right' style='padding-top: 20px;'>
          <a href='logout.php' class='button'><button type='submit' class='btn btn-warning' id='sbm' name='sbm'> Logout </button></a>
        </div>
        <div class="row" align="center" style="padding-top: 100px;">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-2"></div>
                    <div class="col-sm-8">


          						<?php
          						if(isset($_COOKIE['session_cookie']))
          						{
          							session_start();
          							if ($_POST['csrf_Token'] == $_SESSION['CSRF_Token'])
          							{
          								$name=$_POST['name'];
          								echo "<div class='alert alert-warning' role='alert'>"."Updated Successfully.You are free of CSRF"."</div>";
          							}
          							else
          							{
          								echo "<script>alert('CSRF Alert')</script>";
          							}
          						}
                      else{
                        echo "<h3>Error! Please Log in again.</h3><br>
                        <a href='index.php' class='button'>
                          <button type='submit' class='btn btn-warning' id='dsc' name='dsc'> Login </button>
                        </a>";
                      }
          						?>


                    </div>
                  <div class="col-sm-2"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </body>
  </html>