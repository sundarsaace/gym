<?php
    include('common/config.php');


    if(isset($_POST["loginToken"]) && $_POST["loginToken"] == "yes"){
    	$username = $_POST["username"];
    	$password = $_POST["password"];

    	$loginQry = "SELECT * FROM tbl_admin where username='".$username."' and password='".$password."'";
    	$ExcuteLoginQry = mysqli_query($conn, $loginQry);
    	if(mysqli_num_rows($ExcuteLoginQry) > 0){
    		$userDetails = mysqli_fetch_array($ExcuteLoginQry);
    		$adminID = $userDetails['id'];
    		$session["adminID"] = $adminID;
    		header("Location: index.php");
    		exit;
    	}else {
    		$errorMessage = "Username/Password is invalid";
    	}
    } else {
    	$errorMessage = "";
    }
?>
<!DOCTYPE html>
<html >
	<head>
	 <meta charset="UTF-8">
	 <title>Admin Login</title>
	 <link rel="stylesheet" href="css/style.css">  
	</head>

	<body>
	<div class="container">
	 <div class="form">
	   <div class="thumbnail">
	     <h3> Admin Login</h3>
	   </div>
	   <div id="errormsg"><?php echo $errorMessage;?></div>
	   <form class="login-form" onsubmit="return formvalidation()" method="post">
	     <input type="hidden" name="loginToken" id="loginToken" value="no"/>
	     <input type="text" name="username" id="username" placeholder="username"/>
	     <input type="password" name="password" id="password" placeholder="password"/>
	     <button>Login</button>
	   </form>
	 </div>
	</div>
	</body>

    <!-- jQuery Js -->
    <script src="js/jquery-1.10.2.js"></script>
    <script>
    	function formvalidation(){
    		var username = $.trim($("#username").val());
    		var password = $.trim($("#password").val());
    		if(username == ''){
    			$("#errormsg").html("User name is empty");
    			$("#username").focus();
    			return false;
    		} else if(password == ""){
    			$("#errormsg").html("Password is empty");
    			$("#password").focus();
    			return false;
    		}
    		$("#errormsg").html("");
    		$("#loginToken").val("yes");
    		return true;
    	}

    </script>
</html>