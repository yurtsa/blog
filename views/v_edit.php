<div class="form">

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
			<? foreach($validateErrors as $error): ?>
				<p><?=$error?></p>
				<? endforeach; ?>
		</form>
</div>
<hr>
<a href="index.php">Move to main page</a>