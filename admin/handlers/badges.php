<?php

require_once '../../connection.php';


$badge = $_POST['badge'];


// Prepare the SQL statement
$sql = "INSERT INTO badges (badges) VALUES ('$badge')";
mysqli_query($conn, $sql);

$previous_page = $_SERVER["HTTP_REFERER"];
header('Location: ' . $previous_page);
?>
