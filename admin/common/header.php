<?php
    include('config.php');
    //$_session['userID'] = '78';
    //if(!isset($_session['userID']) && empty($_session['userID'])){
	//	header("Location: login.php");
	//	exit;
	//}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gym - Admin</title>
    <!-- Bootstrap Styles-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="css/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="css/custom-styles.css" rel="stylesheet" />
    <link href="css/admin-style.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	
    <link href="js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

	<script src="js/jquery-1.10.2.js"></script>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Gym</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
            	<li> Welcome Admin !!</li>
            	<li> <a href="logout.php">Log Out </a></li>
            </ul>
        </nav>
        <!--/. NAV TOP  -->
