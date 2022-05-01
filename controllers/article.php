<?php

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