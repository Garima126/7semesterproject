<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Price Comparision System</title>
	<style>
		body {
			margin: 0px;
			padding: 0px;
		}
		#header {

			height: 50px;
			width: 100%;
			background: #2d2dd5;
		}
		#header  #title {
			color: white;
			margin-left: 40%;
			margin-top: 7px;
			font-size: 40px;
		}
		.container {
			background: #e5d7d7;
			height: 500px;
		}
		#search-txt {
			font-size: 30px;
		}
		#search-btn{
			font-size: 30px;
		}
	</style>
</head>
<body>
	<div id="header">
		<span id="title">Price Comparision System</span>
	</div>
      <div class="container">
      		<div class="search-panel">
      			<input type="text" name="search-txt" id="search-txt"/>
      			<input type="button" name="search-btn" value="Compare" id="search-btn"/>
      		</div>
      </div>
</body>
</html>