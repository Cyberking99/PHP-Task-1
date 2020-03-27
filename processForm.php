<?php
if(isset($_POST["submit"])) {
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$message = $_POST["message"];

$randNum = rand(1,999);
$name = $firstname.$lastname;
$extension = ".txt";
$filename = $name.$extension;
if(file_exists($filename)){
  $file = fopen($name.$randNum.$extension, "w");
}else{
  $file = fopen($filename, "w");
}

//$file = fopen($firstname.$lastname.".txt", w);
fwrite($file,"Firstname: ".$firstname."\r\n\r\nLastname: ".$lastname."\r\n\r\nEmail: ".$email."\r\n\r\nMessage:\r\n".$message);
fclose($file);
}
?>