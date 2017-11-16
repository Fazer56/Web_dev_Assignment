<?php
  session_start();
  require 'core.php';
  //include 'login.php';
  require 'connect.php';
  echo $_SESSION['id'];

                  if(isset($_SESSION['id']) && !empty($_SESSION['id']))
                  {
                    echo "<p style='color:red; float:right;'>".$_SESSION['username1']."</p>";
                  }
                  else
                  {
                      echo "log-in";
                  }  

?>
<!DOCTYPE Html>
<html>
	<head>
	<title>

	</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
  <link rel='stylesheet' href="css/bootstrap.min.css" type='text/css'/> <!-- this can be applied to all pages to add bootstrap css //-->
  <link rel='stylesheet' href="css/theme.css" type='text/css'/>
  <link rel='stylesheet' href="css/carousel.css" type='text/css'/> 
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

			         <?php
   
                  
               ?>
               <form id="form2" method="post">
                <label style="margin-top: 10px;color:white;">Search</label> 
                <input type="search" style="margin-top: 10px;" name="search" id="searchBox">
                <input type="submit" id="searchBtn" value="search"> 
                <a href="login.php"><input style="margin-top: 10px; float:right; background: #2B2B2B; color: #0167BB;" type="button" id="btn1" value="log-in"></a>
              </form>
              
			</div>
          </div>
        </nav>

      </div>
    </div>
     <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: -10%;">
  		<!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>
		  
  <!-- Wrapper for slides -->
  		<div class="carousel-inner">
    		<div class="item active">
      			<a href="movies/bladerunner.php"><img src="http://static.tumblr.com/8bfc962a5ca8f773d634b9aec670e029/yxql1hy/tjtov7rlt/tumblr_static_26osk19e9qck84sgcwogsw88w.jpg" alt="Blade Runner"></a>
    		</div>

		    <div class="item">
		      <a href="movies/avatar.php"><img src="http://xdesktopwallpapers.com/wp-content/uploads/2011/04/Avatar-Movie-Poster.jpg" alt="avatar"></a>
		    </div>

		    <div class="item">
		      <a href="movies/dunkirk.php"><img src="https://i.imgur.com/bc2I2MB.jpg" alt="New York"></a>
		    </div>
			
			<div class="item">
		      <a href="movies/paddington.php"><img src="https://shyfyy.files.wordpress.com/2017/10/paddington2-3.jpg" alt="New York"></a>
		    </div>
			
			<div class="item">
		      <a href="movies/Kong.php"><img src="https://www.hdwallpapers.in/walls/kong_skull_island_4k-wide.jpg" alt="Kong"></a>
		    </div>
  		</div>

  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		    <span class="sr-only">Next</span>
		  </a>
</div>

  <?php

    $searchErr = ""; 
    $search = "";
    
   /* if ($_SERVER["REQUEST_METHOD"] == "POST") {

      if (empty($_POST["search"])) {
        $searchErr = "Enter search please";
      } 
      else {
      $searchErr = test_input($_POST["search"]);
       
      }

      }
*

   


    $servername="localhost";
    $username="root";
    $password="faoilean56";
    $dbname="database";

   

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 

     $search = $conn->escape_string($_POST["search"]); //protects against sql injections
   

     $sql = "SELECT movie_name FROM movies WHERE movie_name LIKE '%$search%' ";

     $result = $conn->query($sql);

     if( $result->num_rows > 0 ) {
      
      
      $_SESSION['username1'] = "Welcome ".$username1;  
       header("Location: login.php");
      
    }
    else if( $result->num_rows == 0 ){
      $_SESSION['username1'] = "Error Invalid Login";

       header("Location: login.php");
    }
    else{
       $_SESSION['username1'] = "";
    }
        

    

    
  $conn = null;

*/
  ?> 

	</body>
</html>