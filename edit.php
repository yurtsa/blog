<?php
$isSave=false;

include_once('functions.php');
include_once('model/db.php');
include_once('model/articles.php');
include_once('model/cats.php');
saveLog();


	if($_SERVER['REQUEST_METHOD']==='POST'){
		$fields['id_article']=$_POST['id_article'];
		$fields['title']=trim($_POST['title']);	
		$fields['description']=trim($_POST['description']);
		$fields['id_cat']=$_POST['id_cat'];	
		if($fields['title']==='' || $fields['description']==='')
			$err="Заполните все поля";
			else{
				$idurl=$fields['id_article'];
				saveArticle($fields);
				header("location: article.php?id=$idurl");
				}

			}
	else{
	$fields['id_article']=(int)($_GET['id'] ?? '');
	$article = getArticle($fields);
	$cats=getCats();
}
?>

<div class="form">
	<? if($isSave): ?>
		<p>Your arcticle is save!</p>
	<? else: ?>
		<form method="post">
		<input type="hidden" name="id_article" value="<?=$article[0]['id_article']?>"><br>
			Title:<br>
			<input type="text" name="title" value="<?=$article[0]['title']?>"><br>
			Content:<br>
			<input type="text" name="description" value="<?=$article[0]['description']?>"><br>
			Категория:
			<select name="id_cat">
		
				<? foreach($cats as $cat): ?>
				<? if($cat['id_cat'] == $article[0]['id_cat']):?>
				<option value="<?=$cat['id_cat']?>" SELECTED><?=$cat['title']?></option>
				<? else: ?>
				<option value="<?=$cat['id_cat']?>" ><?=$cat['title']?></option>	
				<? endif; ?>
				<? endforeach; ?>
			</select><br>
			<button>Save</button>
			<p><?=$err?></p>
		</form>
	<? endif; ?>
</div>
<hr>
<a href="index.php">Move to main page</a>