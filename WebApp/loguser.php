	
	
<?php

	$usernameErr = "";
	$username1 = "";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "User Name is required";
  } else {
    $usernameErr = test_input($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9]+$/",$username1)) {
      $usernameErr = "Only letters and numbers no white space allowed"; 
    }
  }

 
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}	


	$servername="localhost";
	$username="root";
	$password="faoilean56";
	$dbname="mydb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
   $stmt =$conn->prepare("SELECT userName FROM user WHERE userName = '$username1'");
   $username1 = $mysqli->escape_string($_POST['username']); //escape username to protect against sql injections

   $result = $mysqli->query("SELECT userName FROM user WHERE userName = '$username1'");

   $result = $conn->query($sql);

   if($result->num_rows > 0) //output data
   {
      while($row = result->fetch_assoc()) {

      }
   }



	$stmt->bindParam(':username', $username1);

    // insert a row
    $username1 = $_POST["username"];
    $stmt->execute();

     $url='http://localhost/WebApp/Index2.php';

    echo '<script>window.location = "'.$url.'";</script>';
    die;
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;



?>