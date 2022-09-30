<?php
require 'connection.php';
$query = "SELECT COUNT(*) FROM `modules`;";

try {
$result = mysqli_query($con, $query);
} catch (Throwable $th) {
throw $th;
}
$nbr = mysqli_fetch_array($result);

header("Access-Control-Allow-Credentials:true", false);
header("Content-Type: application/json", false);
header('Access-Control-Allow-Origin:"*"', false);
echo json_encode($nbr[0]);

?>