<?php
// On recupère les different module 
function getModule()
{
    require 'connection.php';
    $query = "SELECT DISTINCT * FROM `modules` NATURAL JOIN `type_mesures` ORDER BY id_module ASC;";
        
    try {
      $result = mysqli_query($con, $query);
  } catch (Throwable $th) {
      throw $th;
  }
    
  /*   $response = mysqli_fetch_array($result, MYSQLI_NUM);
    
    header('Content-Type: application/json');
    echo json_encode($response); */

    return $result;
}