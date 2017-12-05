<?php

$db = mysqli_connect('localhost','root','toor','highhopes');

$name = $_POST['EventName'];
$link = $_POST['EventLink'];
$date = $_POST['EventDate'];
$time = $_POST['EventTime'];

$query = "INSERT INTO events (`EventName`,`EventLink`,`EventDate`,`EventTime`) VALUES ('".$name."','".$link."','".$date."','".$time."')";
//echo $query;
$result = mysqli_query($db, $query);
if(!$result){
  echo mysqli_error($db);
}
else{
  echo '<!DOCTYPE html><head><meta http-equiv="refresh" content="0; url=./manage.php" /></head></html>';
}

 ?>
