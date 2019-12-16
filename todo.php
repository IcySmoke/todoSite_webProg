<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="icon" href="public/images/icon.png">
    <title>TodoSite</title>
  </head>
  <body>
    <?php
    session_start();
    if(!$_SESSION['logged']){
      header("Location: http://localhost/todoSite_webProg/index.php");
      exit();
    }else{
      echo '<p>goood</p>';
      console_log($_SESSION['logged']);
    }
     ?>
  </body>
</html>
<?php
function console_log($data) {
  $output = $data;
  if (is_array($output))
      $output = implode(',', $output);

  echo "<script>console.log('" . $output . "');</script>";
}
 ?>
