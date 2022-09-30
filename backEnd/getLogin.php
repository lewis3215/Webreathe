<?php
// Fonction permettant de réaliser l'authentification
function getLogin($user, $pass)
{
    require 'connection.php';
    $query = "SELECT * FROM `user` WHERE `email_user` ='$user' and `password` = '$pass';";
        
    try {
      $result = mysqli_query($con, $query);
  } catch (Throwable $th) {
      throw $th;
  }
    
  /*   $response = mysqli_fetch_array($result, MYSQLI_NUM);
    
    header('Content-Type: application/json');
    echo json_encode($response); */

    if(mysqli_num_rows($result)>0){
        header('Location: http://localhost/Webreathe/home.php');
    }
}