<?php
  session_start();
  require 'core.php';
  require 'connect.php';
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
              <a class="navbar-brand" href="Index2.php">Movies AF</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav" >
                <li ><a href="Index2.php">Home</a></li>
                <li class="active"><a href="/aboutapp">Movies</a></li>
                <li><a href="/contact">Watchlist</a></li>     
                <li> </li>
                <li> </li>
                <li> </li> 
              </ul>


              <label style="margin-top: 10px;color:white;">Search </label> 
              <input type="search" style="margin-top: 10px;" name="search" id="searchBox">
              <a href="login.php"><input style="margin-top: 10px; float:right; background: #2B2B2B; color: #0167BB;" type="button" id="btn1" value="log-in"></a>
              
            </div>
          </div>
        </nav>

      </div>
      <?php
      if(isset($_SESSION['id']) && !empty($_SESSION['id']))
                  {
                    echo "<p style='color:red; float:right;'>".$_SESSION['username1']."</p>";
                  }
                  else
                  {
                      echo "log-in";
                  }  
            ?>

    </div>
     <div class="container-fluid" style=" margin: auto; width:50%; background-color: #fcfcff;margin-top: -2%;">
     
     
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4"></div>
      </div>

      <div class="row" >
        <?php

        $id = isset($_GET['id']) ? $_GET['id'] : '';

          $servername="localhost";
          $username="root";
          $password="faoilean56";
          $dbname="database";

          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          } 


          $sql = "SELECT movie_id, movie_name, director, movie_img, rating FROM movies";

          $result = $conn->query($sql);

          //if($result) //check query worked
          //{

           /* echo '<div class="row"  >
                      <div class="col-sm-1"> 
                      </div>
                      <div class="col-sm-3"></div>
                     <div class="col-sm-6"> <h3> 1. Blade Runner </h3> <p>Rating 8.3</p> <br/><p>A young blade runner's discovery of a long-buried secret leads him to track down former blade runner Rick Deckard, who's been missing for thirty years. </p></div>
        
                  </div>';*/


                         //get each row in the table
              while($row = mysqli_fetch_array($result)){
                  echo '<div class="row" style="padding-top: 5%;">
                          <div class="col-sm-1"> 
                            <input type="image" src="'.$row['movie_img'].'" style="margin-left: 60%;margin-top: 60%; height: 700%; width:700%;"> 
                          </div>
                           <div class="col-sm-3"></div>
                          <div class="col-sm-6"> <h3>'.$row['movie_id'].'. '.$row['movie_name'].'</h3> <p>Rating '.$row['rating'].'</p> <br/></div>
                    </div>';
              
              }
          //}  

          $conn = null;

        ?>

    

       <br/><br/><br/>

      <div class="row"  >
     
        <div class="col-sm-1"> 
              <img src="http://static.tumblr.com/8bfc962a5ca8f773d634b9aec670e029/yxql1hy/tjtov7rlt/tumblr_static_26osk19e9qck84sgcwogsw88w.jpg" style="margin-left: 60%;margin-top: 60%; height: 700%; width:700%;">
          </div>
          <div class="col-sm-3"></div>
        <div class="col-sm-6"> <h3> 1. Blade Runner </h3> <p>Rating 8.3</p> <br/><p>A young blade runner's discovery of a long-buried secret leads him to track down former blade runner Rick Deckard, who's been missing for thirty years. </p></div>
        
      </div>

       <br/><br/><br/>


      <!-- <div class="row"  >
     
        <div class="col-sm-1"> 
              <input src="http://static.tumblr.com/8bfc962a5ca8f773d634b9aec670e029/yxql1hy/tjtov7rlt/tumblr_static_26osk19e9qck84sgcwogsw88w.jpg" style="margin-left: 60%;margin-top: 60%; height: 700%; width:700%;">
          </div>
          <div class="col-sm-3"></div>
        <div class="col-sm-6"> <h3> 1. Blade Runner </h3> <p>Rating 8.3</p> <br/><p>A young blade runner's discovery of a long-buried secret leads him to track down former blade runner Rick Deckard, who's been missing for thirty years. </p></div>
        
      </div>

       <br/><br/><br/>


             <div class="row"  >
     
        <div class="col-sm-1"> 
              <img src="http://static.tumblr.com/8bfc962a5ca8f773d634b9aec670e029/yxql1hy/tjtov7rlt/tumblr_static_26osk19e9qck84sgcwogsw88w.jpg" style="margin-left: 60%;margin-top: 60%; height: 700%; width:700%;">
          </div>
          <div class="col-sm-3"></div>
        <div class="col-sm-6"> <h3> 1. Blade Runner </h3> <p>Rating 8.3</p> <br/><p>A young blade runner's discovery of a long-buried secret leads him to track down former blade runner Rick Deckard, who's been missing for thirty years. </p></div>
        
      </div>

       <br/><br/><br/>


             <div class="row"  >
     
        <div class="col-sm-1"> 
              <img src="http://static.tumblr.com/8bfc962a5ca8f773d634b9aec670e029/yxql1hy/tjtov7rlt/tumblr_static_26osk19e9qck84sgcwogsw88w.jpg" style="margin-left: 60%;margin-top: 60%; height: 700%; width:700%;">
          </div>
          <div class="col-sm-3"></div>
        <div class="col-sm-6"> <h3> 1. Blade Runner </h3> <p>Rating 8.3</p> <br/><p>A young blade runner's discovery of a long-buried secret leads him to track down former blade runner Rick Deckard, who's been missing for thirty years. </p></div>
        
      </div>

       <br/><br/><br/>


             <div class="row"  >
     
        <div class="col-sm-1"> 
              <img src="http://static.tumblr.com/8bfc962a5ca8f773d634b9aec670e029/yxql1hy/tjtov7rlt/tumblr_static_26osk19e9qck84sgcwogsw88w.jpg" style="margin-left: 60%;margin-top: 60%; height: 700%; width:700%;">
          </div>
          <div class="col-sm-3"></div>
        <div class="col-sm-6"> <h3> 1. Blade Runner </h3> <p>Rating 8.3</p> <br/><p>A young blade runner's discovery of a long-buried secret leads him to track down former blade runner Rick Deckard, who's been missing for thirty years. </p></div>
        
      </div>

       <br/><br/><br/>


             <div class="row"  >
     
        <div class="col-sm-1"> 
              <img src="http://static.tumblr.com/8bfc962a5ca8f773d634b9aec670e029/yxql1hy/tjtov7rlt/tumblr_static_26osk19e9qck84sgcwogsw88w.jpg" style="margin-left: 60%;margin-top: 60%; height: 700%; width:700%;">
          </div>
          <div class="col-sm-3"></div>
        <div class="col-sm-6"> <h3> 1. Blade Runner </h3> <p>Rating 8.3</p> <br/><p>A young blade runner's discovery of a long-buried secret leads him to track down former blade runner Rick Deckard, who's been missing for thirty years. </p></div>
        
      </div>

       <br/><br/><br/>


             <div class="row"  >
     
        <div class="col-sm-1"> 
              <img src="http://static.tumblr.com/8bfc962a5ca8f773d634b9aec670e029/yxql1hy/tjtov7rlt/tumblr_static_26osk19e9qck84sgcwogsw88w.jpg" style="margin-left: 60%;margin-top: 60%; height: 700%; width:700%;">
          </div>
          <div class="col-sm-3"></div>
        <div class="col-sm-6"> <h3> 1. Blade Runner </h3> <p>Rating 8.3</p> <br/><p>A young blade runner's discovery of a long-buried secret leads him to track down former blade runner Rick Deckard, who's been missing for thirty years. </p></div>
        
      </div>

       <br/><br/><br/>


             <div class="row"  >
     
        <div class="col-sm-1"> 
              <img src="http://static.tumblr.com/8bfc962a5ca8f773d634b9aec670e029/yxql1hy/tjtov7rlt/tumblr_static_26osk19e9qck84sgcwogsw88w.jpg" style="margin-left: 60%;margin-top: 60%; height: 700%; width:700%;">
          </div>
          <div class="col-sm-3"></div>
        <div class="col-sm-6"> <h3> 1. Blade Runner </h3> <p>Rating 8.3</p> <br/><p>A young blade runner's discovery of a long-buried secret leads him to track down former blade runner Rick Deckard, who's been missing for thirty years. </p></div>
        
      </div>

       <br/><br/><br/>


             <div class="row"  >
     
        <div class="col-sm-1"> 
              <img src="http://static.tumblr.com/8bfc962a5ca8f773d634b9aec670e029/yxql1hy/tjtov7rlt/tumblr_static_26osk19e9qck84sgcwogsw88w.jpg" style="margin-left: 60%;margin-top: 60%; height: 700%; width:700%;">
          </div>
          <div class="col-sm-3"></div>
        <div class="col-sm-6"> <h3> 1. Blade Runner </h3> <p>Rating 8.3</p> <br/><p>A young blade runner's discovery of a long-buried secret leads him to track down former blade runner Rick Deckard, who's been missing for thirty years. </p></div>
        
      </div>

       <br/><br/><br/>

             <div class="row"  >
     
        <div class="col-sm-1"> 
              <img src="http://static.tumblr.com/8bfc962a5ca8f773d634b9aec670e029/yxql1hy/tjtov7rlt/tumblr_static_26osk19e9qck84sgcwogsw88w.jpg" style="margin-left: 60%;margin-top: 60%; height: 700%; width:700%;">
          </div>
          <div class="col-sm-3"></div>
        <div class="col-sm-6"> <h3> 1. Blade Runner </h3> <p>Rating 8.3</p> <br/><p>A young blade runner's discovery of a long-buried secret leads him to track down former blade runner Rick Deckard, who's been missing for thirty years. </p></div>
        
      </div>

       <br/><br/><br/>


             <div class="row"  >
     
        <div class="col-sm-1"> 
              <img src="http://static.tumblr.com/8bfc962a5ca8f773d634b9aec670e029/yxql1hy/tjtov7rlt/tumblr_static_26osk19e9qck84sgcwogsw88w.jpg" style="margin-left: 60%;margin-top: 60%; height: 700%; width:700%;">
          </div>
          <div class="col-sm-3"></div>
        <div class="col-sm-6"> <h3> 1. Blade Runner </h3> <p>Rating 8.3</p> <br/><p>A young blade runner's discovery of a long-buried secret leads him to track down former blade runner Rick Deckard, who's been missing for thirty years. </p></div>
        
      </div> -->

       <br/><br/><br/>
        
      

    </div>
     
    </div>
  
</div>

	<script>

	</script>

	</body>
</html>