<?php
include 'variable.php';
 $servername = "localhost";
 $username = "Snowie";
 $password = "";
 $db = "DataBase_Survey";

// Create connection
$con= new mysqli( $servername, $username, $password);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $db";
if ($con->query($sql) === TRUE) {
echo "";
} else  {
echo "Error creating database: " . $con->error;
}


// Create connection
$con= new mysqli( $servername, $username, $password, $db);
// Check connection
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS person(
surname VARCHAR(50) NOT NULL,
    firstname VARCHAR(50) NOT NULL,
    contactnumber INT(10) NOT NULL,
    age INT(10) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    favfood VARCHAR(50)NOT NULL,
    eatout VARCHAR(50) NOT NULL,
    movies VARCHAR(50) NOT NULL,
    tv VARCHAR(50) NOT NULL,
    radio VARCHAR(50) NOT NULL
)";

if ($con->query($sql) === TRUE) {
echo "";
} else {
echo "Error creating table: " . $con->error;

}

 
if(isset($_POST['surname']))
  $surname = mysqli_real_escape_string($con, $_POST['surname']);
if(isset($_POST['firstname'])) 
  $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
if(isset($_POST['gender']))
  $gender = mysqli_real_escape_string($con, $_POST['gender']);  
if(isset($_POST['contactnumber']))
  $contactnumber =  mysqli_real_escape_string($con, $_POST['contactnumber']);
if(isset($_POST['age']))
  $age = mysqli_real_escape_string($con, $_POST['age']);
/*if(isset($_POST['favfood']))
  $favfood = mysqli_real_escape_string($con, $_POST['favfood']);*/
if(isset($_POST['eatout']))
  $eatout = mysqli_real_escape_string($con, $_POST['eatout']);
if(isset($_POST['movies']))
  $movies = mysqli_real_escape_string($con, $_POST['movies']);
if(isset($_POST['tv']))
  $tv = mysqli_real_escape_string($con, $_POST['tv']);
if(isset($_POST['radio']))
  $radio = mysqli_real_escape_string($con, $_POST['radio']);

//$con = mysqli_connect("$servername","$username","$password","$db");
// Create connection
$con= new mysqli( $servername, $username, $password, $db);

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
} else {
  $sql = $con->prepare("INSERT INTO person (surname, firstname, contactnumber, age, gender, favfood, eatout, movies, tv, radio)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  $sql->bind_param("ssiissssss", $surname, $firstname, $contactnumber, $age, $gender, $favfood, $eatout, $movies, $tv, $radio);
  $sql->execute();

}
$con->close();

?>
  