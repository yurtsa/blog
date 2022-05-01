<?php
include_once('core/logs.php');
include_once('core/arr.php');
include_once('model/db.php');
include_once('model/articles.php');
include_once('model/cats.php');
saveLog();

	if($_SERVER['REQUEST_METHOD']==='POST'){
		$fields=extractFields($_POST, ['title', 'description', 'id_cat']);
		$validateErrors=validateArticle($fields);
		if(count($validateErrors)==1){
		$addArt=addArticle($fields);
		header('location: index.php');
		exit();
		}	
	}else{
		$fields=['title'=>'','description'=>''];
		$validateErrors=[];
	}
$cats=getCats();	
include("views/v_add.php");