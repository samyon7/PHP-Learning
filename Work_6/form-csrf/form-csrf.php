<?php

session_start();
if(!array_key_exists('csrf-token',$_SESSION)){
	$_SESSION['csrf-token'] = bin2hex(random_bytes(32));
}

if($_SERVER['REQUEST_METHOD']==='POST'){
	if(!array_key_exists('csrf-token',$_POST)){
		echo '<p>ERROR : CSRF Token was not found in POST payload';
	}
	elseif($_POST['csrf-token'] !== $_SESSION['csrf-token']){
		echo '<p>ERROR : CSRF Token is not valid</p>';
	}
	else{
		echo '<p>OK : CSRF Token is valid, email will validated</p>';
	}
}
?>

<form method="post">
	<label for="email">New Email:</label><br>
	<input type="text" name="email" id="email" value=""><br>
	<button type="submit">Submit without CSRF Token</button>
	<button type="submit" name="csrf-token">Submit with empty/invalid CSRF Token</button>
	<button type="submit" name="csrf-token" value=" <?php echo $_SESSION['csrf-token']?>">Submit with CSRF Token</button>
</form>
