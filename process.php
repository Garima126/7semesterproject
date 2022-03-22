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
$keyword = str_replace(' ', '+', $_POST['search-txt']);
$sasurl = "https://www.sastodeal.com/catalogsearch/result/?q=$keyword";
/*$html = file_get_contents($url);


$dom = new DOMDocument;
@$dom->loadHTML($html);
$output = array();
$keyword2 = str_replace(' ', '-', $_POST['search-txt']);
foreach ($dom->getElementsByTagName('a') as $item) {

  if (strpos($item->getAttribute('href'), $keyword2) !== false) {
    print_r($item->getAttribute('href'));
    
   $output[] = array (
      'str' => $dom->saveHTML($item),
      'href' => $item->getAttribute('href'),
      'anchorText' => $item->nodeValue
   );
  }
}

//print_r($output);die;
die;
*/
/*

$urls = array(
	array(
		'site' => 'https://www.sastodeal.com/electronic/mobile/oneplus.html', 'start' => '<span class="price">', 'end' => '</span>'),
	array('site' => 'https://www.daraz.com.np/smartphones/oneplus_brand/', 'start' => 'Rs. ', 'end' => 'ratingScore')
);
*/

$html = file_get_contents($sasurl);

$dom = new DOMDocument;
@$dom->loadHTML($html);
$output = null;
$keyword2 = str_replace(' ', '-', $_POST['search-txt']);
foreach ($dom->getElementsByTagName('a') as $item) {

  if (strpos($item->getAttribute('href'), $keyword2) !== false) {
    
   $output[] = array (
      'href' => $item->getAttribute('href'),
   );
  }


}


$urls = array(
  array('site' => $output[0]['href'], 'start' => '<span class="price">', 'end' => '</span>'),
  array('site' => $output[6]['href'], 'start' => '<span class="price">', 'end' => '</span>'),
  /*array('site' => 'daraz-product.txt', 'start' => 'Rs. ', 'end' => '\"}";')*/
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
  $pArray = []; 
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
  		$pArray[] = array ('site' => $url['site'], 'price' => $price);
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
 <div id="chart_div"></div>
<!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {
      	
        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Site');
        data.addColumn('number', 'Price');
     
<?php
    for($i=0;$i<count($pArray);$i++){?> 
data.addRows([
	<?php
	$p = preg_replace('/[^0-9]/', '', $pArray[$i]['price']);  
        echo "['" . $pArray[$i]['site'] . "'," . $p . "]";
     
    ?>   
]);
<?php } ?>



      

        // Set chart options
        var options = {'title':'Price Difference of the product',
                       'width':600,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

<?php require_once("footer.php"); ?>