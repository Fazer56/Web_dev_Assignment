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
              <a class="navbar-brand" href="Index.php">Movies AF</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav" >
                <li ><a href="Index.php">Home</a></li>
                <li ><a href="movies.php">Movies</a></li>
                <li class="active"><a href="watchlist.php">Profile</a></li>  
                <li><a href="feedback.php">Feedback</a></li>    
                <li> </li>
                <li> </li>
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
                      echo '<a href="login.php"><input style="margin-top: 10px; float:right; background: #2B2B2B; color: #0167BB;" type="button" id="btn1" value="log-in"> </a>';
                   }
              ?>
              
            </div>
          </div>
        </nav>

      </div>
    </div>
     <div class="container-fluid" style=" margin: auto; width:50%; background-color: #fcfcff;margin-top: -2%; margin-bottom: 20%;">
     
     <?php

      if(isset($_SESSION['id']) && !empty($_SESSION['id']))
      {
         if($_SERVER["REQUEST_METHOD"] == "POST")
         {


          $name = $_FILES['file']['name'];
          $extension = strtolower(substr($name, strpos($name,'.')+ 1)); //store extension of file in variable
          $type = $_FILES['file']['type']; //type of file
          $tmpname = $_FILES['file']['tmp_name']; //temporary location of file on server

          if(isset($name))
          {
            if(!empty($name)) //if name not empty
            {
              $location = 'uploads/';

              //upload images only
              if(($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png') && ($type=='image/jpeg' || $type=='image/png')) 
              {

                 if(move_uploaded_file($tmpname, $location.$name))
                 {
                    $newloc = $location.$name;
                    $jon = $_SESSION['id'];

                    //$sqlupdate1 = "UPDATE table SET commodity_quantity=".$qty."WHERE user=".addslashes($rows['user'])."'";
                    $sql = "UPDATE myuser SET profile_pic = '$newloc' WHERE user_id = $jon";
                    //mysql_query("UPDATE blogEntry SET content = '$udcontent', title = '$udtitle' WHERE id = $id")

                    if ($conn->query($sql) === TRUE) {
                        echo "<br><br><br>Record updated successfully";
                    } 
                    else 
                    {
                            echo "Error updating record: " . $conn->error;
                    }
                   

                 } //.name name of uploaded file
                 else
                 {
                    echo 'Error Uploading';
                 }
             }
          }
          

        }
        else
          {
            echo 'Please choose a file';
          }

      }

    }
    else
    {
      echo '<h4>Please log in!</h4> <a href="login.php"><input style="margin-top: 10px; float:centre;" type="button" id="btn1" class="btn btn-primary" value="log-in"> </a>';
    }

      ?>
     
      <div class="row">
        <div class="col-sm-4"><h2>Profile</h2></div>
        <div class="col-sm-4">  
        
        </div>
        <div class="col-sm-4"> 
            <form id="pForm" method="POST" action="watchlist.php" enctype="multipart/form-data">
            <br>
            <br>
            <br>

            <input type="file" vlaue="Upload Picture" name="file"> <br/> <br/> <br/> <br/>
            <input type="submit" class="btn btn-primary" name="submit" value="Upload Picture">
            </form>
        </div>
      </div>
        <br>
      <div class="row">
        <div class="col-sm-4"> 
          <?php
            if(isset($_SESSION['id']) && !empty($_SESSION['id']))
            {
                  $jon = $_SESSION['id'];
                  $sql = "SELECT profile_pic, firstname, lastname FROM myuser WHERE user_id = $jon";
                  $result = $conn->query($sql);

                  if($result->num_rows > 0)
                  {
                    $row = $result->fetch_assoc();
                  
                    echo  '<img src="'.$row['profile_pic'].'" class="img-thumbnail" alt="Cinque Terre" width="304" height="300">
                              <br/> <br/> <br/> <br/>
                          <div class="row">
                          <div class="col-sm-8"> <h5>Name: <br> '.$row['firstname'].' '.$row['lastname'].'</h5></div>';
                  }
                  else
                   {
                      echo '<img src="" class="img-thumbnail" alt="Upload Profile Picture" width="304" height="300">';
                   }
              
                
            }
            else
            {
                  echo '<p>Please sign to access profile!</p>';
            }

          ?>
        
    </div>
     
    </div>
  
</div>

	<script>

	</script>

	</body>
</html>