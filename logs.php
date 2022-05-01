<?php
include_once('core/logs.php');
include_once('core/arr.php');
include_once('model/db.php');
include_once('model/articles.php');
include_once('model/cats.php');
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

	