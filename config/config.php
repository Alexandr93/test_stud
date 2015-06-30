<?php
/*
 * конфигурацианный файл для подключения к БД и упрощенной записи путей для request-ов
 */
class Config{
    var $BASE_URL="stud";
    var $DB_HOST="localhost";
    var $DB_USER="root";
    var $DB_PASS="";
    var $DB_NAME="stud";
    
    
}
$config=new Config();
class AppPath{
	function __construct(){
		$this->set_app_path();
	}
	function set_app_path(){
		$app_dir=dirname(dirname(__FILE__));
		
	
	set_include_path($app_dir);
	}
	
	
}