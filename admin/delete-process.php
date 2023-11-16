<?php

require_once '../connection.php';

$sql = "DELETE FROM user_form WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
   $previous_page = $_SERVER["HTTP_REFERER"];
   header('Location: ' . $previous_page);
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);

?>