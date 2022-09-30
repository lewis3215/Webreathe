<?php
// Controller de la page home
require 'connection.php';
require 'getTypeMesure.php';
require 'getModule.php';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//On recupere la method utilise lors de l'appel du controller
$request_method = $_SERVER["REQUEST_METHOD"];
if ($con) {
  switch ($request_method) {
    case 'POST':
      if(!empty($_POST["nomModule"]) && !empty($_POST["typeMesure"]))
      {
        $nomModule = ($_POST["nomModule"]);
        $typeMesure = ($_POST["typeMesure"]);
        postModule($nomModule, $typeMesure);
      }else{
        echo $_POST["typeMesure"];
        echo "Can't send a void data";
      }

      break;

    case 'GET':
         $module = getModule();
         $typeMesure = getTypeMesure();
       
		/* while ($ligne = $response->fetch_assoc()) {
			echo $ligne['nom_module'].'<br>';
		} */
		
break;
/*
case 'PUT':
break;

case 'DELETE':
break; */
default:
header("HTTP/1.0 405 Method Not Allowed");
break;
}
}

?>