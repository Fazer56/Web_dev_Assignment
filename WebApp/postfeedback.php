	
	
<?php

	$nameErr = $emailErr = $genderErr = $dateErr = $feedbackErr = "";
	$name = $email = $gender = $date = $feedback = "";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Name"])) {
    $nameErr = "User Name is required";
  } else {
    $nameErr = test_input($_POST["Name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[A-z]+$/",$name)) {
      $nameErr = "Only letters and numbers no white space allowed"; 
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

	 if (empty($_POST["Gender"])) {
    $genderErr = "Gender is required";
	 }
	 
	 if (empty($_POST["feedback"])) {
    $feedbackErr = "Please leave a comment";
	 }
	 
	 
	
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}	


	$servername="147.252.138.17";
	$username="root2";
	$password="alex";
	$dbname="database";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
   $stmt =$conn->prepare("INSERT INTO feedback(name, email, gender, date, feedback) 
		VALUES(:name, :email, :gender, :date, :feedback)");

	$stmt->bindParam(':name', $name);
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':Gender', $gender);
	$stmt->bindParam(':date', $date);
	$stmt->bindParam(':feedback', $feedback);

    // insert a row
    $name = $_POST["Name"];
	$email = $_POST["Email"];
    $gender = $_POST["Gender"];
    $date = $_POST["date"];
    $feedback = $_POST["feedback"];
    $stmt->execute();

     $url='http://localhost/WebApp/success.php';

    echo '<script>window.location = "'.$url.'";</script>';
    die;
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;



?>