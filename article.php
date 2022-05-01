<?php

include_once('core/functions.php');
include_once('model/db.php');
include_once('model/articles.php');
saveLog();	


	$fields['id_article']=(int)($_GET['id'] ?? '');
	$article = getArticle($fields);

?>
<div class="content">

		<div class="article">
			<h1><?=$article[0]['title']?></h1>
			<div><?=$article[0]['description']?></div>
			<div><?=$article[0]['dt']?></div>
			<hr>
			<a href="delete.php?id=<?=$article[0]['id_article']?>">Remove</a>
		</div>

</div>
<hr>
<a href="index.php">Move to main page</a>