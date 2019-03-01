<?php


$response = array(
  'valid' => false,
  'message' => 'Post argument "user" is missing.'
);

if( isset($_POST['username']) ) {

$usename = $_POST["username"];

$host = "localhost";
$user = "root";
$password ="";
$db = "kelapa";
$link = mysqli_connect($host, $user, $password, $db) or die('mysqli is error ');
$query = "SELECT username FROM admins WHERE username = '$usename' ";
$result = mysqli_query($link, $query);
$row=  mysqli_num_rows($result);

if($row != 0) {
    // User name is registered on another account
    $response = array('valid' => false, 'message' => 'Username sudah ada');
  } else {
    // User name is available
    $response = array('valid' => true);
  }
}
  echo json_encode($response);?>
