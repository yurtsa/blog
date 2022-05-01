<?php
include_once('functions.php');
include_once('model/db.php');
include_once('model/articles.php');
saveLog();	

$isDel=false;
$err='';

	if(isset($_GET['id']))
	{
		$fields['id_article']=(int)$_GET['id'];
		removeArticle($fields);
		$isDel=true;
	}
?>
<? if($isDel): ?>
<p>Статья удалена</p>
<? else: ?>
<p>Не задан ID статьи</p>
<? endif; ?>
<hr>
<a href="index.php">Move to main page</a>