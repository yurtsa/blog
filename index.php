<?php

include_once('functions.php');
include_once('model/db.php');
include_once('model/articles.php');
saveLog();	
$mess=getArticles();
?>
<a href="add.php">Add article</a>
<hr>
<div class="articles">
	<? foreach($mess as $mess): ?>
		<div class="article">
			<h2><?=$mess['title']?></h2>
			<a href="article.php?id=<?=$mess['id_article']?>">Read more</a>
			<a href="edit.php?id=<?=$mess['id_article']?>">Edit</a>
			<a href="delete.php?id=<?=$mess['id_article']?>">Delete</a>
		</div>
	<? endforeach; ?>
</div>
<hr>
<div><p><a href="logs.php">Логи доступа</a></p></div>
	