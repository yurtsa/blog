<?php
include_once('functions.php');
include_once('model/db.php');
include_once('model/articles.php');
include_once('model/cats.php');
saveLog();
/*git*/

	if($_SERVER['REQUEST_METHOD']==='POST'){
		$fields['id_cat']=$_POST['id_cat'];
		$fields['title']=trim($_POST['title']);
		$fields['description']=trim($_POST['description']);
		
		if($fields['title']==="" || $fields['description']==="" || $fields['id_cat']==="")
			$err="Заполните все поля";
			else{
				$addArt=addArticle($fields);
				header('location: index.php');
				exit();
			}
	}else{
		$cats=getCats();
	}
?>
<div class="form">
	<? if($addArt): bool?>
		<p>Your arcticle is add!</p>
	<? else: ?>
		<form method="post">
			Title:<br>
			<input type="text" name="title" value="<?=$fields['title']?>"><br>
			Content:<br>
			<input type="text" name="description" value="<?=$fields['description']?>"><br>
			Категория: 
			<select name="id_cat">
				<? foreach($cats as $cat): ?>
				<option value="<?=$cat['id_cat']?>"><?=$cat['title']?></option>
				<? endforeach; ?>
			</select><br>
			<button>Send</button>
			<p><?=$err?></p>
		</form>
	<? endif; ?>
</div>
<hr>
<a href="index.php">Move to main page</a>