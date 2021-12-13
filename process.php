<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Price Comparision System</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
	<div id="header">
		<span id="title">Price Comparision System</span>
	</div>
<body>
<?php session_start(); ?>
<?php
if (!isset($_POST['search-txt']) || empty($_POST['search-txt'])) {
	$_SESSION['err'] = "Enter search text";
	header('Location:index.php');
}
$keyword = $_POST['search-txt'];
?>

<div class="process-panel">
	 <p id="searching-txt">You are searching keyword: <span style="background: #8e9df3;"><?php echo $keyword; ?></span></p>
 <p>Do you want to cancel searching further ? <a href="index.php">Go Back</a></p>
	 
	<span id="search-status-bar" style="height: 300px;">
	 
	
   </span>
   <img src="loader.gif" id="loader"/>
</div>
</body>
</html>