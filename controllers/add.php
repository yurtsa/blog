<?php

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