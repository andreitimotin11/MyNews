<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 08.12.2016
 * Time: 19:59
 */
require_once __DIR__ . "/../classes/DB.php";
require_once __DIR__ . "/../classes/AbstractModel.php";
class Admin extends AbstractModel{
	public static $title;
	public static $text;
	public static $table = "news";
	public static function getAll(){
		$db = new DB;
		return $db->queryAll("SELECT * FROM news", "News");
	}
	public static function getOne($id){
		$db =  new DB();
		return $db->queryOne('SELECT * FROM news WHERE id = ' . $id, 'News');
	}
	public static function AddNews($title,$text,$dat){

		mysql_connect("localhost", "root",'');
		mysql_select_db('MyNews');
/*		mysql_query("INSERT INTO news(id , title, text, dat) VALUES  (NULL, '$title', '$text', '$dat')");
*/
		$db = new DB;
		$sql = "INSERT INTO " . static::$table . " (id, title, text, dat) VALUES (NULL, " . $title . " ," . $text . ", " . $dat;
		echo $sql;
		mysql_query($sql);
		return $db->queryAll($sql, static::$class);
		//insertNews($title,$text,$dat);
		return true;
		//$db->queryAll();
	}

}