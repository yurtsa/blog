<?php

include_once('core/logs.php');
include_once('core/arr.php');
include_once('model/db.php');
include_once('model/articles.php');
include_once('model/cats.php');
saveLog();	


	if(is_numeric($_GET['id'])){
		$fileds['id_article']=$_GET['id'];
		$article = getArticle($fileds); 
		if(empty($article))
		{
			header("HTTP/1.1 404 Not Found");
			header("location: 404.php");
			exit();			
		}
	}
	else
	{
		header("HTTP/1.1 404 Not Found");
		header("location: 404.php");
		exit();	
	}


include("views/v_article.php");