<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Todo</title>
  </head>
  <header class="header">
    <h1>Todo Site</h1>
  </header>
  <body>
    <?php
    $page = $_GET['page'];
    if($page == null){ $page = 'login'; }

      if($page == 'login'){
        echo file_get_contents('login.php');
      }elseif ($page == 'register'){
        echo file_get_contents('register.php');
      }

      $servername = "localhost";
      $dbUsername = "debian-sys-maint";
      $dbPass = "RQR8qQapxFhNqcia";
      $dbName = "todo_site";

      if(isset($_POST['login-btn']) && !empty($_POST['username']) && !empty($_POST['password'])){

				$conn = new mysqli($servername, $dbUsername, $dbPass, $dbName);

				if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
				}else{

          $loginUsername = $_POST['username'];
          $loginPassword = $_POST['password'];
          console_log('usr: ' . $loginUsername);
          console_log('pass: ' . $loginPassword);

          $sql = "SELECT id, username, password FROM Users WHERE username = \"" . $loginUsername . "\";";
          console_log($sql);
					$result = $conn->query($sql);
          $row = mysqli_fetch_row($result);
          if($row){
            console_log('ok');
          }else {
            console_log('not ok');
          }

        }
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
