<?php
	if(count($errors) > 0){
		$errors = implode(" ", $errors);
		echo "<script type='text/javascript'>alert('$errors');</script>";
	}
 ?>
