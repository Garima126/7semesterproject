
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

<div class="process-panel">
	 <p id="searching-txt">You are searching keyword: <span style="background: #8e9df3;"><?php //echo $keyword; ?></span></p>
 <p>Do you want to cancel searching further ? <a href="index.php">Go Back</a></p>
	 
	<span id="search-status-bar" style="height: 300px;">
   </span>
   <img src="loader.gif" id="loader" style="display:block;" />

<?php require 'htmldom.php'; ?>
<?php 
$urls = array(
	array('site' => 'https://www.sastodeal.com/electronic/mobile/oneplus.html', 'start' => '<span class="price">', 'end' => '</span>'),
	array('site' => 'https://www.daraz.com.np/smartphones/oneplus_brand/', 'start' => 'Rs. ', 'end' => 'ratingScore')
);

  foreach($urls as $url) {
  	$price = getPrice($url['site'], $url['start'], $url['end'] );
  	if(!is_object($price)){
  	echo "price: ". $price . "<br/>";
  }
  }

 ?>
 <script>
 	var x = document.getElementById("loader");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
</script>
</div>
</body>
</html>