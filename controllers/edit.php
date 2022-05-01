<?php

	if($_SERVER['REQUEST_METHOD']==='POST'){
		$fields=extractFields($_POST, ['title', 'description', 'id_cat', 'id_article']);
		$validateErrors=validateArticle($fields);
		if(count($validateErrors)==1){
		saveArticle($fields);
		$idurl=$fields['id_article'];
		header("location: index.php?c=article&id=$idurl");
		exit();
		}	

	}
	else{
	$fields['id_article']=(int)($_GET['id'] ?? '');
	$article = getArticle($fields);
	$cats=getCats();
	$validateErrors=[];
}

include("views/v_edit.php");