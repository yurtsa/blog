<?php
include_once('core/logs.php');
include_once('core/arr.php');
include_once('core/system.php');
include_once('model/db.php');
include_once('model/articles.php');
include_once('model/cats.php');

saveLog();
#проверка гита с другого компа
$cname=$_GET['c'] ?? 'index'; #проверка controller
$path="controllers/$cname.php";

    if(checkControllerName($cname) && file_exists($path)){
        include_once($path);
    }else
    {
        header("HTTP/1.1 404 Not Found");
        header("location: 404.php");       
    }
