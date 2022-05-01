<div class="form">
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
			<? foreach($validateErrors as $error): ?>
				<p><?=$error?></p>
				<? endforeach; ?>
		</form>
</div>
<hr>
<a href="index.php">Move to main page</a>