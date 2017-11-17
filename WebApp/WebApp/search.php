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
  
  <link rel="stylesheet" href="jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>

</script>
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
              <a class="navbar-brand" href="Index.php">Movies AF</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav" >
                <li ><a href="Index.php">Home</a></li>
                <li ><a href="movies.php">Movies</a></li>
                <li><a href="watchlist.php">Profile</a></li>   
                 <li><a href="feedback.php">Feedback</a></li>    
                <li> </li>
                <li> </li>
                <li> 
                 </li> 
              <li> 
                  <?php
                    if(isset($_SESSION['id']) && !empty($_SESSION['id']))
                                {
                                  echo "<p style='color: #759CBD; margin-top: 10px; margin-left: 20px; float:right;'><b>".$_SESSION['username1']."</b></p>";
                                }
                                else
                                {
                                    echo "";
                                }  
                  ?>
                </li>
              </ul>
               <?php
                    if(isset($_SESSION['id']) && !empty($_SESSION['id']))
                    {

                         echo '<a href="logout.php"><input style="margin-top: 10px; float:right; background: #2B2B2B; color: #0167BB;" type="button" id="btn1" value="log-out"> </a>';
                   }   
                   else
                   {
                      echo '<a href="login.php"><input style="margin-top: 10px; float: centre; background: #2B2B2B; color: #0167BB;" type="button" id="btn1" value="log-in"> </a>';
                   }
              ?>
             
              
            </div>
          </div>
        </nav>

      </div>
      

    </div>
     <div class="container-fluid" style=" margin-left: 15%; width:50%; background-color: #fcfcff;margin-top: -2%;">
	
	</br></br></br>
     <?php

    
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
      

         $search = ($_POST['search']); //protects against sql injections
       

         $sql = "SELECT * FROM movies WHERE movie_name LIKE '%".$search."%'"; 

         $result = $conn->query($sql);

         if($result->num_rows > 0){
          
            while($row = mysqli_fetch_array($result))
            {
               echo'<div class="row" style="padding-top: 5%;">
                <div class ="col-sm-1">
                
                <input type="image" name="'.$row['movie_id'].'" src="'.$row['movie_img'].'" style="margin-left: 20%;margin-top: 60%; height: 700%; width:700%;"> 
                  </div>
                   <div class="col-sm-3"></div>
                  <div class="col-sm-6"> <legend><h3>'.$row['movie_id'].'. '.$row['movie_name'].'</h3> </legend><p>Rating '.$row['rating'].'</p> <br/></div>
              </div>
               <div class="row" style="padding-top: 2%;">
                  <div class ="col-sm-1">
                  </div>
                  <div class="col-sm-3"></div>
                  <div class="col-sm-6"><p>Description: '.$row['movie_desc'].'</p></div>

                </div> 
                <div class="row" style="padding-top: 2%;">
                  <div class ="col-sm-1">
                  </div>
                  <div class="col-sm-3"></div>
                  <div class="col-sm-6"><p>Cast: '.$row['cast1'].', &nbsp'.$row['cast2'].', &nbsp'.$row['cast3'].'</p></div>

                </div> 
                <div class="row" style="padding-top: 2%;">
                  <div class ="col-sm-1">
                  </div>
                  <div class="col-sm-3"></div>
                  <div class="col-sm-6"><p>Directior: '.$row['director'].'
                  </p></div>

                </div>'; 
            } 
         
        }
        else
        {
          echo '<h1>Movie Doesnt exist in Database<h2/>';
        }
       
      }   

    

  
  ?> 
      


