<?php

	function addArticle(array $fields) : bool{
		$sql="INSERT INTO articles (title, description, id_cat) VALUES(:title, :description, :id_cat)";
		dbQuery($sql, $fields);
		return true;
	}

	function removeArticle(array $fields) : bool{
		$sql="DELETE FROM articles WHERE id_article=:id_article";
		dbQuery($sql, $fields);
		return true;
	}

	function getArticles() : array{
		$sql="SELECT id_article, title, description, dt  FROM articles ORDER BY 'DESC'";
		$arts=dbQuery($sql);
		return $arts->fetchAll();
	}

	function getArticle(array $fields) : array{
		$sql="SELECT id_article, id_cat, title, description, dt  FROM articles WHERE id_article=:id_article";
		$art=dbQuery($sql, $fields);
		return $art->fetchAll();
	}

	function saveArticle(array $fields) : bool{
		$sql="UPDATE articles SET title=:title, description=:description, id_cat=:id_cat WHERE id_article=:id_article";
		$art=dbQuery($sql, $fields);
		return true;
	}

	function validateArticle(array &$fields) : array{
		$errors[]="";

		if(mb_strlen($fields['title'], "UTF-8") < 5)
		$errors[]="Название не короче 5 символов";

		if(mb_strlen($fields['description'], "UTF-8") < 10)
		$errors[]="Описание не короче 10 символов";

		if(!is_numeric($fields['id_cat']))
		$errors[]="ID категории не число";

		if(isset($fields['id_article']) && !is_numeric($fields['id_article']))
		$errors[]="ID статьи не число";

		$fields['title']=htmlspecialchars($fields['title']);
		$fields['description']=htmlspecialchars($fields['description']);

		return $errors;
	}

