<?php
	include_once('functions.php');
?>

<a href="index.php">Move to main page</a>
<hr>
<p>Выбор даты</p>
<hr>
<p><?=readAllLog();?></p>
<div class="articles">
<?php
if(isset($_GET['date'])){
readLog($_GET['date']);
}
?>
</div>

	