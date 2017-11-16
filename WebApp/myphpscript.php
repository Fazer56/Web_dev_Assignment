<?php
//REQUIRE 'connection.php';

  $servername="147.252.138.146";
  $username="root2";
  $password="alex";
  $dbname="database";

    // Create connection
  $conn =  new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 

$contentVar = $_POST['contentVar'];

 $sql = "SELECT * FROM movies WHERE movie_id = '$contentVar'";

          $result = $conn->query($sql);
		  
		 

          if($result) //check query worked
          {
				//echo'</br></br></br> </br> </br> <p style="color: red;">FUCK OFF</p> ';
			  
			   while($row = mysqli_fetch_array($result)){

		  
					if($contentVar == $row['movie_id']){
						echo'<div class="container" style="width: 30%; height: 30%; position: fixed; left: 950px; top: 100px">
							  <div class="jumbotron">
								<legend><h2>'.$row['movie_name'].'</h2> 
								<h5>age:'.$row['age_res'].'&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp'.$row['duration'].'mins</h5></legend>      
								<p4>'.$row['movie_desc'].'</p4></br></br>
								<p4>Cast: '.$row['cast1'].', &nbsp'.$row['cast2'].', &nbsp'.$row['cast3'].'</p4></br></br>
								<p4>Cast: '.$row['director'].'</p4>
							  </div>    
							</div>';
					}
				}
		  }	


?>