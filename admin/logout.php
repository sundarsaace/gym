<?php
    include('config.php');
    if(isset($_session['userID']) && !empty($_session['userID'])){
		unset($_session['userID']);
	}
	header("Location: login.php");
?>
