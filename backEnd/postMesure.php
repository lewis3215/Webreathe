<?php
// Insertion d'une nouvelle mesure
require 'connection.php';

extract($_GET);

if (isset($_GET["id"]) && $_GET["val"]) {
    try {
        if (mysqli_query($con, "INSERT INTO mesures (val_mesure, date_mesure,id_module) VALUES ($val,current_date(),$id);")) {
            $res = mysqli_query($con, "SELECT COUNT(*) FROM `mesures` WHERE `id_module` = $id");
            //On selectionne les modules dont l'état est 1 car ce sont eux qui sont fonctionnels
            $resDuree = mysqli_query($con, "SELECT `duree_fonct`,`id_module` FROM `modules`  WHERE `etat`=1");
            if($nbr = mysqli_fetch_array($res)){
            $querry2 = "UPDATE `modules` SET `vma`= $val, `nbr_data_send` = $nbr[0] WHERE `id_module` = $id";
            if(mysqli_query($con, $querry2))
            {
                while($duree = mysqli_fetch_array($resDuree))
                {
                    //On incrémente de 1 la durée uniquement des modules dont l'état est 1 car ce sont eux qui sont fonctionnels
                    mysqli_query($con, "UPDATE `modules` SET `duree_fonct`= $duree[0]+1 WHERE `id_module` = $duree[1]");
                }
                
            }else{
                echo 'erro went update';
            }
            
            }else{
                echo 'erro querry 2';
            }
        } else {
            echo "erro querry 1";
        }
    } catch (Throwable $th) {
        throw $th;
    }
} else {
    echo 'is not different to nul';
}