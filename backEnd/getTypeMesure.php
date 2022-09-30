<?php
function getTypeMesure()
{
    require 'connection.php';
    $query = "SELECT * FROM `type_mesures`;";
        
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