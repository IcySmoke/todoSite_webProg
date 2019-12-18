<?php
if(isset($_POST['add_todo'])){
  console_log('add todo');
  echo "<form class='' action='todos.php' method='post'>
  <input type='text' name='todo_content' value=''>
  <button class='done-btn' name='send_todo'></button></div>
  </from>";
}

if(isset($_POST['send_todo'])){
  $content = $_POST['todo_content'];
  console_log($username);

  $db = mysqli_connect('localhost', 'debian-sys-maint', 'RQR8qQapxFhNqcia', 'todo_site');

  $sql = "INSERT INTO todos (user_id, content, status) VALUES ((SELECT id FROM users WHERE username = '$username'), '$content', 0)";
  mysqli_query($db, $sql);
  header("Refresh:0");
}
 ?>
