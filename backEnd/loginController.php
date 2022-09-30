<?php
// Controller de la page de  login
require 'connection.php';
require 'getLogin.php';
$request_method = $_SERVER["REQUEST_METHOD"];
if ($con) {
  switch ($request_method) {
    case 'POST':
      if(!empty($_POST["email"]) && !empty($_POST["pass"]))
      {
        $user = ($_POST["email"]);
        $pass = ($_POST["pass"]);
        getLogin($user, $pass);
      }else{
        echo "Can't send a void data";
      }

      break;
    default:
      header("HTTP/1.0 405 Method Not Allowed");
      break;
  }
}

?>