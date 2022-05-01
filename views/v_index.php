<a href="add.php">Add article</a>
<hr>
<div class="articles">
 <? if(!empty($mess)): ?>
	<? foreach($mess as $mess): ?>
		<div class="article">
			<h2><?=$mess['title']?></h2>
			<a href="article.php?id=<?=$mess['id_article']?>">Read more</a>
			<a href="edit.php?id=<?=$mess['id_article']?>">Edit</a>
			<a href="delete.php?id=<?=$mess['id_article']?>">Delete</a>
		</div>
	<? endforeach; ?>
	<? else: ?>
		<div class="article">Нет статей</div>
	<? endif; ?>
</div>
<hr>
<div><p><a href="logs.php">Логи доступа</a></p></div>
	