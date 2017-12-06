<?php

$db = mysqli_connect('localhost','root','toor','highhopes');

$name = $_POST['Name'];
$position = $_POST['Position'];
$phone = $_POST['Phone'];
$email = $_POST['Email'];
$desc = $_POST['Description'];

$query = "INSERT INTO employee (`Name`,`Position`,`Phone`,`Email`,`Description`) VALUES ('".$name."','".$position."','".$phone."','".$email."','".$desc."')";
//echo $query;
$result = mysqli_query($db, $query);
if(!$result){
  echo mysqli_error($db);
}
else{
  echo '<!DOCTYPE html><head><meta http-equiv="refresh" content="0; url=./manage.php" /></head></html>';
}

 ?>
