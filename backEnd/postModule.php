<?php
// Ajout dun modules'
        function postModule($nomModule, $typeMesure)
{
    require 'connection.php';
    $query = "INSERT INTO `modules`(`nom_module`, `type_mesure`) VALUES ('$nomModule',$typeMesure);";
       
    try {
        if(mysqli_query($con, $query)){
            if($idResult = mysqli_query($con, "SELECT id_module FROM `modules` ORDER BY id_module DESC LIMIT 1;")){
                $id = mysqli_fetch_array($idResult);
                    if(mysqli_query($con, "INSERT INTO mesures (date_mesure,id_module) VALUES (current_date(),$id[0]);")){
                        header('Location: http://localhost/Webreathe/home.php');
                    }
            }
           
        }else{
            echo "erro";
        }
    } catch (Throwable $th) {
        throw $th;
    }


}