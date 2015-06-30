<?php
require_once 'config/config.php';


/**
 * Класс Db содержит подключение к БД и выполнение запросов пользователя к БД
 *
 * @author Alexandr
 */
class Db extends Config {
    private $connection;
    
    function __construct() {
        $this->open_connection();
    }
    
    private function open_connection() {
        $this->connection=  mysql_connect($this->DB_HOST, $this->DB_USER, $this->DB_PASS);
        if(!$this->connection){
            die("Database connection failed".  mysql_error());
            
        }else{
            
            $db_select=  mysql_select_db($this->DB_NAME);
            if(!$db_select){
                die("Database connection failed".  mysql_error());
                
            }
        }
        
        mysql_query("set names utf8") or die ("set names utf8 failed");
    }
    
    public function sql($query) {
        
        $result = mysql_query($query,$this->connection);
			if(!$result){
				die("Database query failed".mysql_error());
			}
		return $result;
    }
   
}
 $db=new Db();


