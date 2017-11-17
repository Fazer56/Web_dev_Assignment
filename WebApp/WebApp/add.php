<?php
  session_start();
  require 'core.php';
  require 'connect.php';

         if($_SERVER["REQUEST_METHOD"] == "POST")
         {
				      echo 'fuck';
                $movieID = $_POST['$movie'];
				        $user = $_SESSION['id'];
                  //$sqlupdate1 = "UPDATE table SET commodity_quantity=".$qty."WHERE user=".addslashes($rows['user'])."'";
                  $sql = "UPDATE movies SET user_id = ".$user." WHERE movie_id = ".$movieID."'";

                  if ($conn->query($sql) === TRUE) {
                      echo "<br><br><br>Record updated successfully";
                  } 
                  else 
                  {
                          echo "Error updating record: " . $conn->error;
                  }
                
            }
          
          


     

      ?>