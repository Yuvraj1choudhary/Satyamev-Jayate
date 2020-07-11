<?php

$servername = "localhost";
$username = "id10518661_satyamevjayate02";
$password = "Yuvraj@123";
$database = "id10518661_satyamevjayate";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
function NewUser()
{
	$fullname = $_POST['name'];
	$userName = $_POST['user'];
	$email = $_POST['email'];
	$password =  $_POST['pass'];
	$query = "INSERT INTO WebsiteUsers (fullname,userName,email,pass) VALUES ('$fullname','$userName','$email','$password')";
	$data = mysqli_query ($query)or die(mysql_error());
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...";
	}
}

function SignUp()
{
if(!empty($_POST['user']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$query = mysqli_query("SELECT * FROM WebsiteUsers WHERE userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error());

	if(!$row = mysqli_fetch_array($query) or die(mysql_error()))
	{
		newuser();
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
}
}

if(isset($_POST['submit']))
{
	SignUp();
}
?>
