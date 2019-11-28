<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Login-Memistry</title>
  	<meta charset="utf-8" />
  	<meta name="viewport" content="width=divice-width, initial-scale=1" />
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    
  <nav class="navbar navbar-default navvisuals">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img alt="Brand" margin=2m, nbvcvnm xc0px width=20 src="images/logo.gif">
      </a>
      <p class="navbar-text">Memistry</p>
      </div>
    
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" id="">
        <li><a href="home.php">Home</a></li>
				<li><a href="Login.php">Login</a></li>
				<li><a href="Profile.php">Profile</a></li>
				<li><a href="newpost.php">New Post</a></li>
        
      </ul>
      
      
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </nav>
    <form>
      <fieldset>
        <legend>Login</legend>
        <p>
          <label>Username</label>
          <input type = "text"
                 id = "myText"/>
        </p>
        <p>
          <label>Password</label>
          <input type = "password"
                  id = "myPwd"/>
        </p>
        <span class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<a class="btn btn-primary btn-lg" href="home.php"> Login </a>
				</span>
        <div class="row buttons">
    				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    					<a class="btn btn-primary btn-lg" href="Register.php"> Register</a>
    				</div>
        </div>
      </fieldset>
    </form>
    <footer class="footer">
    <p>Terms of Service</p>
  </footer>
  </body>
</html>
