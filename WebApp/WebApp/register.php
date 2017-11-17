	
	
<?php

  // include 'testData.php';

   function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

	$usernameErr = $firstnameErr = $lastnameErr = $emailErr = $genderErr = $websiteErr = "";
	$username1 = $password = $firstname = $lastname = $email = $gender = $comment = $website = "";
	
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

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format"; 
      }
    }

    if (empty($_POST["firstName"])) {
      $firstnameErr = "First name is required";
    } else {
      $firstname = test_input($_POST["firstName"]);
      // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
      if (!preg_match("/^[A-Za-z]+$/",$firstname)) {
        $firstnameErr = "Only letters and no whitespace aloud"; 
      }
    }

    if (empty($_POST["lastName"])) {
      $lastnameErr = "Last name is required";
    } else {
      $lastname = test_input($_POST["lastName"]);
      // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
      if (!preg_match("/^[A-Za-z]+$/",$lastname)) {
        $lastnameErr = "Only letters and no whitespace aloud"; 
      }
    }

  
  }




	$servername="localhost";
	$username="root";
	$password="faoilean56";
	$dbname="database";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // prepare sql and bind parameters
       $stmt =$conn->prepare("INSERT INTO myuser(username, password, firstname, lastname, email) 
    		VALUES(:username, :password, :firstname, :lastname, :email)");

      
    	$stmt->bindParam(':username', $username);
    	$stmt->bindParam(':password',  $hash);
    	$stmt->bindParam(':firstname', $firstname);
    	$stmt->bindParam(':lastname', $lastname);
    	$stmt->bindParam(':email', $email);

        // insert a row
        $username = $_POST["username"];
    	 $password = $_POST["password"];
        $hash = md5($password);
        $firstname = $_POST["firstName"];
        $lastname = $_POST["lastName"];
        $email = $_POST["email"];
        $stmt->execute();


          $_SESSION['check'] = true;
          $_SESSION['Registered'] = "Thanks for registering ".$username.". Now log in above";  

          header('Location: http://localhost/WebApp/login.php');

        }
    catch(PDOException $e)
        {
        echo "Error: " . $e->getMessage();
        }
    $conn = null;

  }


?>