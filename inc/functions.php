<?php
require_once("config.php");
require_once("tools.php");
require_once("sql.php");

if(DEBUG == true){
    ini_set('display_errors', 1);
}else{
    ini_set('display_errors', 0);
}