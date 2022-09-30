<?php
//Ici on récupère l'ensemble des etat des différent modules
    require 'connection.php';
    try {
        $query = "SELECT nom_module,etat FROM `modules` ";
        $result = mysqli_query($con, $query);
  } catch (Throwable $th) {
        throw json_encode($th);
  }
  
    $response = array();
    $i = 0;
    while($data = mysqli_fetch_array($result, MYSQLI_NUM)){
        $response[$i] = $data[1];
        $i++;
    }
    
    header("Access-Control-Allow-Credentials:true", false);
    header("Content-Type: application/json", false);
    header('Access-Control-Allow-Origin:"*"', false);
    //On retourne les données sous format JSON
    echo json_encode($response);