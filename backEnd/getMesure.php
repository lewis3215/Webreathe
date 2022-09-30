<?php
// On récupère toutes les messures de tous les modules
    require 'connection.php';
        $id = $_GET['id'];
    try {
        $query = "SELECT * FROM `mesures` where `id_module` = $id ORDER BY id_mesure DESC LIMIT 7";
        $result = mysqli_query($con, $query);
  } catch (Throwable $th) {
        throw json_encode($th);
  }
  
    $response = array();
    $i = 0;
    while($data = mysqli_fetch_array($result, MYSQLI_NUM)){
        $response['val'][$i] = $data[1];
        $response['date'][$i] = $data[2];
        $i++;
    }
    
    header("Access-Control-Allow-Credentials:true", false);
    header("Content-Type: application/json", false);
    header('Access-Control-Allow-Origin:"*"', false);
    //On retourne les données sous format JSON
    echo json_encode($response);