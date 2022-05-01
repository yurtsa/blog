<?php
include_once('core/logs.php');
include_once('core/arr.php');
include_once('model/db.php');
include_once('model/articles.php');
include_once('model/cats.php');
saveLog();	
$mess=getArticles();

include("views/v_index.php");