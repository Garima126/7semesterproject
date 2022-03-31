<?php require_once("header.php"); ?>
	<?php require_once("session.php"); ?>
	<?php if (!isset($_SESSION['username'])) {  ?>
      <div class="containerx" style=" background-image:url(pic1.jpg); background-repeat: no-repeat; width: 100%; background-size: 100%;  ">
      		<div class="search-panel">
      			<form action="process.php" method="post">
      				<input type="text" name="search-txt" placeholder="Type a product name" id="search-txt" />
      				<button type="submit"  id="search-btn">Search</button><br>
      				<?php if ($session->getSession('search-txt-err') == true) { ?>
      					<span style="margin-left:20%; background:red; padding: 10px 10px 10px 10px;">Please enter a search item</span>
      					<?php $session->clearSession('search-txt-err'); ?>
      				<?php } ?>
      			</form>
      		</div>
      </div>
	  <?php } ?>
 <?php require_once("footer.php"); ?>
					  