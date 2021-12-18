<?php require_once("header.php"); ?>
  <?php require("session.php"); ?>
	<?php if (empty($_POST['search-txt'])) {  
		    $session->setSession("search-txt-err", true);
				header('Location:index.php');
				exit();
    }
	?>

<div class="process-panel">
	 <p id="searching-txt">You are searching keyword: <span style="background: #8e9df3;"><?php echo $_POST['search-txt']; ?></span></p>
 <p>Do you want to search again ? <a href="index.php" class="btn btn-lg">Go Back</a></p>
	 
	<span id="search-status-bar" style="height: 300px;">
   </span>
   <img src="loader.gif" id="loader" style="display:block;" />

<?php 

require 'remote.php'; 

$urls = array(
	array(
		'site' => 'https://www.sastodeal.com/electronic/mobile/oneplus.html', 'start' => '<span class="price">', 'end' => '</span>'),
	array('site' => 'https://www.daraz.com.np/smartphones/oneplus_brand/', 'start' => 'Rs. ', 'end' => 'ratingScore')
);

?>
  <table class="table">
  	<thead class="thead-dark">
  		<tr>
  			<th></th>
  			<th>Source Website</th>
  			<th>Price</th>
    	</tr>
    </thead>
    <tbody>
  <?php 
  $num = 1;
  foreach($urls as $url) { ?>
  	<tr>
  		<td><?php echo $num; ?></td>
  		<td>
  			<?php echo $url['site']; ?>
  		</td>
  		<td>
  	<?php 
  	$price = $remote->getPrice($url['site'], $url['start'], $url['end'] );
  	if (!is_object($price)) {
  		echo "price: ". $price . "<br/>";
  	}
  	?>
    </td>
    <?php $num++; ?>
    </tr>
  <?php
  }
 ?>
</tbody>
</table>
 <script>
 	var x = document.getElementById("loader");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
</script>
</div>

<?php require_once("footer.php"); ?>