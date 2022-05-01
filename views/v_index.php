<a href="index.php?c=add">Add article</a>
<hr>
<div class="articles">
 <? if(!empty($mess)): ?>
	<? foreach($mess as $mess): ?>
		<div class="article">
			<h2><?=$mess['title']?></h2>
			<a href="index.php?c=article&id=<?=$mess['id_article']?>">Read more</a>
			<a href="index.php?c=edit&id=<?=$mess['id_article']?>">Edit</a>
			<a href="index.php?c=delete&id=<?=$mess['id_article']?>">Delete</a>
		</div>
	<? endforeach; ?>
	<? else: ?>
		<div class="article">Нет статей</div>
	<? endif; ?>
</div>
<hr>
<div><p><a href="logs.php">Логи доступа</a></p></div>
	