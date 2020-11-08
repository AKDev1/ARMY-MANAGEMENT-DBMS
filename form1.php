<?php
//Start the session to see if the user is authenticated user. 

$sol_id = $_POST['sol_id']; 
$sol_name = $_POST['sol_name']; 
$sol_rank = $_POST['sol_rank']; 
$sol_dob = $_POST['sol_dob']; 
$sol_doj = $_POST['sol_doj']; 
$sol_dor = $_POST['sol_dor']; 
$b_name = $_POST['b_name']; 
$b_year= $_POST['b_year']; 
$birth_place_pincode= $_POST['birth_place_pincode'];
$height= $_POST['height'];
$weight= $_POST['weight'];
$sex= $_POST['sex'];
$chest= $_POST['chest'];

//If all validations are correct, connect to MySQL and execute the query 

//Connect to mysql server 
$link = mysqli_connect('localhost', 'root', ''); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server: ' . mysqli_error()); 
} 
//Select database 
$db = mysqli_select_db($link,'armymanagement'); 
if(!$db){ 
die("Unable to select database"); 
} 
//Create Insert query 
$query = "INSERT INTO soldier  VALUES ('$sol_id','$sol_name' ,'$sol_rank' ,'$sol_dob' , '$sol_doj','$sol_dor', '$b_name' ,'$b_year', '$birth_place_pincode','$height','$weight','$sex','$chest')"; 
//Execute query 
$results = mysqli_query($link,$query); 
 
//Check if query executes successfully 
if($results == FALSE) 
echo mysqli_error($link) ; 
else 
echo 'Data inserted successfully! '; 
 
 

 
 


 
?>
