<?php

if(is_numeric($_GET['id'])){
	$fields['id_article']=$_GET['id'];
	removeArticle($fields);
	header("location: index.php");
}
else
{
	header("HTTP/1.1 404 Not Found");
	header("location: 404.php");
	exit();	
}