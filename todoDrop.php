<?php
  for ($i=0; $i < $index; $i++) {
    echo "<script>
      document.getElementById('drop$i').onclick = function() {
        console.log(document.getElementById('drop$i').innerHTML);
      }
    </script>";
  }
 ?>
