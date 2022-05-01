<?php

function checkControllerName(string $cname){
return !!preg_match('/^[a-z0-9_]+$/', $cname);
}