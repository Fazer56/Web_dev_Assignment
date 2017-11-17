<?php
REQUIRE 'connect.php';


$contentVar = $_POST['contentVar'];

 $sql = "SELECT * FROM movies WHERE movie_id = '$contentVar'";

          $result = $conn->query($sql);
		  
		 

          if($result) //check query worked
          {
		
			   while($row = mysqli_fetch_array($result)){

		  
					if($contentVar == $row['movie_id']){
						echo'<div class="container" style="width: 30%; height: 30%; position: fixed; left: 825px; top: 100px">
							  <div class="jumbotron">
								<legend><h2>'.$row['movie_name'].'</h2> 
								<h5>age:'.$row['age_res'].'&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp'.$row['duration'].'mins</h5></legend>      
								<p4>'.$row['movie_desc'].'</p4></br></br>
								<p4>Cast: '.$row['cast1'].', &nbsp'.$row['cast2'].', &nbsp'.$row['cast3'].'</p4></br></br>
								<p4>Directior: '.$row['director'].'</p4>
							  </div>    
							</div>';
					}
				}
		  }	


?>