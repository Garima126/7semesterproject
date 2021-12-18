<?php require_once("header.php"); ?>
	<?php require_once("session.php"); ?>
      <div class="containerx" style=" background-image:url(pic1.jpg); background-repeat: no-repeat; width: 100%; background-size: 100%;  ">
      		<div class="search-panel">
      			<form action="process.php" method="post">
      				<input type="text" name="search-txt" placeholder="Type a product name" id="search-txt"/>
      				<input type="submit" name="search-btn" value="Search" id="search-btn"/><br>
      				<?php if ($session->getSession('search-txt-err') == true) { ?>
      					<span id="search-txt-err">Please enter a search item</span>
      					<?php $session->clearSession('search-txt-err'); ?>
      				<?php } ?>
      			</form>
      		</div>
      </div>
 <?php require_once("footer.php"); ?>