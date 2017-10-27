<?php
	
	$servername="localhost";
	$username="root";
	$password="faoilean56";
	$dbname="mydb";

	try{
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		//set the PDO error mode to exception   
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
		echo "Connected successfully";   
	}
	catch(PDOException $e){ echo "Connection failed: " . $e->getMessage(); }

	
	$stmt =$conn->prepare("INSERT INTO user(userName,firstName,lastName,userEmail) 
		VALUES(:username, :firstname, :lastname, :email)");

	$stmt->bindParam(':username', $userName);
	$stmt->bindParam(':firstname', $firstName);
	$stmt->bindParam(':lastname', $lastName);
	$stmt->bindParam(':email', $userEmail);
	

?>