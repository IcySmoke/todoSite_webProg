<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
  	<link rel="icon" href="public/images/icon.png">
    <title>todo_site</title>
  </head>
  <body>
    <header class="header-todo">
      <h1>Todo Site</h1>
    </header>
    <div class="topbar">
      <input type="text" name="search" value="">
      <button class='search-btn' ></button>
      <button class='exit-btn'></button>
    </div>
    <div class="tings_to_do">
      <h2>Things to do</h2>
      <?php
      $username = $_SESSION['username'];
      $sql = "SELECT * FROM todos WHERE user_id = (SELECT id FROM users WHERE username = '$username') AND status = 0";
      $result = mysqli_query($db, $sql);

      $index = 0;
      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
          $userId = $row['user_id'];
          echo "<div class='todo' id='drop$index'><p user_id='$userId'>"
          .$row['content'].
          "</p><button class='drop-btn' id='drop$index'></button>
          </div>";
          $index++;
          }
        }
        include('todoDrop.php');
       ?>
       <form class="" action="todos.php" method="post">
         <button class="add_todo" name="add_todo">ADD</button>
       </form>
       <?php include('addTodo.php'); ?>
    </div>
    <div class="doing">
      <h2>Doing</h2>
      <?php
      $sql = "SELECT * FROM todos WHERE user_id = (SELECT id FROM users WHERE username = '$username') AND status = 1";
      $result = mysqli_query($db, $sql);

      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
          echo "<div class=\"todo\">"
          .$row['content'].
          "<button class='done-btn'></button></div>";
        }
      }
       ?>
    </div>
    <div class="done">
      <h2>Done</h2>
      <?php
      $sql = "SELECT * FROM todos WHERE user_id = (SELECT id FROM users WHERE username = '$username') AND status = 2";
      $result = mysqli_query($db, $sql);

      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
          echo "<div class=\"todo\">"
          .$row['content'].
          "</div>";
        }
      }
       ?>
    </div>
  </body>
</html>
