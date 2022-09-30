<?php
// Appel a la page permettant d'établir la connexion avec la base de donné
require 'connection.php';

// Extraction des données envoyé par la methode GET
extract($_GET);

//on verifie qu'on a bien des données qui on été envoyé
if (isset($_GET["id"])) {
    try {
        //On execute notre requette avec gestion des erreurs
        $res = mysqli_query($con, "SELECT `etat` FROM `modules` WHERE `id_module` = $id");
        $etat = mysqli_fetch_array($res);
        $etat[0];
        if($etat[0]){
            if (mysqli_query($con, "UPDATE `modules` SET `etat`= false WHERE `id_module` = $id")) {
                echo 'ok';
               /*  On effectue une redirection vers la page d'acceuil 
                header('Location: http://localhost/Webreathe/home.php'); */
            } else {
                echo "erro";
            }
        }else{
            if (mysqli_query($con, "UPDATE `modules` SET `etat`= true WHERE `id_module` = $id")) {
                echo 'ok';
              /*   On effectue une redirection vers la page d'acceuil 
                header('Location: http://localhost/Webreathe/home.php'); */
            } else {
                echo "erro";
            }
        }
    } catch (Throwable $th) {
        throw $th;
    }
} else {
    echo "is not different to nul\n";
}