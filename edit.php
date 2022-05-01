<?php
$isSave=false;

include_once('core/logs.php');
include_once('core/arr.php');
include_once('model/db.php');
include_once('model/articles.php');
include_once('model/cats.php');
saveLog();


	if($_SERVER['REQUEST_METHOD']==='POST'){
		$fields=extractFields($_POST, ['title', 'description', 'id_cat', 'id_article']);
		$validateErrors=validateArticle($fields);
		if(count($validateErrors)==1){
		saveArticle($fields);
		$idurl=$fields['id_article'];
		header("location: article.php?id=$idurl");
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