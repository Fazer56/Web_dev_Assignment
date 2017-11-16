<?php
  session_start();
   require 'core.php';
   require 'connect.php';
  
  $usernameErr = "";
  $passwordErr = "";
  $username1 = "";
  $pword = "";
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["username1"])) {
      $usernameErr = "User Name is required";
    } 
    else {
    $usernameErr = test_input($_POST["username1"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9]+$/",$username1)) {
      $usernameErr = "Only letters and numbers no white space allowed"; 
    }

    }

    if(empty($_POST["password"])) {
      $passwordErr = "Password Required";
    }
    else {
      $passwordErr = test_input($_POST["password"]);
        if(!preg_match("/^[a-zA-Z0-9]+$/",$pword)) {
            $pword = "Only letters and numbers no white space allowed";
        }
    }
  }

 
function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

} 


 if ($_SERVER["REQUEST_METHOD"] == "POST") 
 {

   

    if(isset($_POST['username1']) && isset($_POST['password']))//check password details have been set
    {

      if(!empty($_POST['username1']) && !empty($_POST['password']))
      {

         $username1 = $_POST["username1"]; //protects against sql injections
         $pword = $_POST["password"];

         $pwordHash = md5($pword);

         $sql = "SELECT user_id FROM myuser WHERE userName = '$username1' AND  password = '$pwordHash' ";

         if($result = $conn->query($sql))
         {
            
             if($result->num_rows > 0 )
             {
              $data =  $result->fetch_assoc();
              $userId = $data["user_id"];

             //get users id to store in session variable
              $_SESSION['id'] = $userId;
              $_SESSION['username1'] = "Welcome ".$username1;  
              

              header('Location: http://localhost/WebApp/login.php');


               
              
            }
            else if( $result->num_rows == 0 ){
              $_SESSION['username1'] = "Error Invalid Login";

               
            }
         }  

     }     
    
      
  }
    
  
}

?>

<!DOCTYPE Html>
<html>
	<head>
	<title>

	</title>

    <style>

    body {

            background-image: url("http://thewallpaper.co/wp-content/uploads/2016/03/cool-background-textures-high-resolution-images-desktop-images-samsung-wallpaper-desktop-images-for-mac-windows-wallpaper-amazing-widescreen-artwork-1920x1200-1440x900.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed; 
          }
  </style>



	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
    <div class="navbar-wrapper">
  
      <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">Movies AF</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav" >
                <li class="active"><a href="index.php">Home</a></li>
                <li ><a href="movies.php">Movies</a></li>
                <li><a href="watchlist.php">Watchlist</a></li>  
                <li><a href="feedback.php">Feedback</a></li>    
                <li> </li>
                <li> </li>
                <li> </li> 
              </ul>

              <label style="margin-top: 10px;color:white;">Search </label> 
              <input type="search" style="margin-top: 10px;" name="search" id="searchBox">
              <input style="margin-top: 10px; float:right; background: #2B2B2B; color: #0167BB;" type="button" id="btn1" href="login.php" value="log-in">

            </div>
          </div>
        </nav>

      </div>
    </div>
     <div class="container-fluid" style=" margin: auto; width:50%; background-color: #fcfcff; margin-top: -1%;">
      <div class="row" style="margin-top: 2%;">
        <div class="col-sm-4"></div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4"></div>
      </div>
      <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
              <?php

                  
                  if(isset($_SESSION['id']) && !empty($_SESSION['id']))
                  {

                    echo "<p style='color:red; float:right;'>".$_SESSION['username1']."</p>"; ;
                  }
                  else
                  {
                      echo "Please log-in";
                  }
            
               ?>
            <h1>Login</h1>
            <form id="form1" method="POST">
            <div class="form-group">
                <label for="username" >Username: </label>
                <input type="text" class="form-control" name="username1" id="username1" pattern="[A-Za-z]+[0-9]+" required>
                

                <label for="username" >Password: </label>
                <input type="password" class="form-control" name="password" id="password1"  required>
                <br/>

                <input type="submit" class="btn btn-primary" value="submit" id="submit1"> 
                <input class="btn btn-primary" type="submit" action="" name="logout" value="Logout">

            </div>
            </form>
          </div>
      </div>    
      <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
            <?php

                    //include 'register.php';

                    if($_SESSION['check'] == true && empty($_SESSION['Register']))
                    {
                      echo "<p>Please Register or log-in </p>";
                    }  
                    else if($_SESSION['check'] == true && !empty($_SESSION['Register']))
                    {
                      echo "<h4>".$_SESSION['Register']."</h4>";
                    }
            
               ?>

            <h1>Register</h1>
            <form id="form2" method="POST" action="register.php">
              <div class="form-group">
              <label for="username" >Username: </label>
                <input type="text" class="form-control" id="username" name="username" pattern="[A-Za-z0-9]+" required>
				
				<label for="password" >Password: </label> 
                <input type="password" class="form-control" id="password" name="password" pattern="[A-Za-z0-9]+" required>
                

                <label for="firstName" >First Name: </label>
                <input type="text" class="form-control" id="firstName" name="firstName" pattern="[A-Za-z]+" required>

                <label for="lastName">Last Name: </label>
                <input type="text" class="form-control" id="lastName" name="lastName" pattern="[A-Za-z]+" required>

                <label for="email" >Email: </label>
                <input type="email" class="form-control" id="email"  name="email" pattern="[\w\-\.\+]+\@[A-Za-z0-9\.\-]+\.[a-zA-Z0-9]{2,4}" required>

                <br/>

                <input type="submit" class="btn btn-primary" value="submit" id="submit1"> 
                <input class="btn btn-primary" type="reset" name="Reset" value="Clear">

              </div>
              </form>
          </div>
      </div>
    </div>
  </div>
    
  
  

	</body>
</html>