<?php

require_once '../../connection.php';



if(isset($_FILES['file']))
{
 $file_name = $_FILES['file']['name'];
 $file_tmp= $_FILES['file']['tmp_name'];
 // name of folder where you want to move your files!
 $upload_folder = "posts/";

if (!file_exists($upload_folder)) {
  mkdir($upload_folder);
}

$news = mb_substr(str_replace('\n', '', $_POST['news']), 0, 255, 'UTF-8');
$news = preg_replace('/\s+/', ' ', trim($news));
$badges = $_POST['badges'];
$created_at = date('Y-m-d');

// Prepare the SQL statement
$sql = "INSERT INTO trending (news, newsimg, badges, created_at) VALUES ('$news', '$file_name', '$badges', '$created_at')";
mysqli_query($conn, $sql);

move_uploaded_file( $file_tmp, $upload_folder . $file_name);

}
$previous_page = $_SERVER["HTTP_REFERER"];
header('Location: ' . $previous_page);
?>
