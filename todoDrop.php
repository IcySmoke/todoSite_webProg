<?php
  for ($i=0; $i < $index; $i++) {
    echo "<script>
      document.getElementById('drop$i').onclick = function() {
        var element = document.getElementById('drop$i').innerHTML
        console.log(element);
      }
    </script>";
  }
 ?>
