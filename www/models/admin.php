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
	public static $date;
	public static function getAll(){
		$db = new DB;
		return $db->queryAll("SELECT * FROM news", "News");
	}
	public static function getOne($id){
		$db =  new DB();
		return $db->queryOne('SELECT * FROM news WHERE id = ' . $id, 'News');
	}
	public static function AddNews($title,$text,$date){

		insertNews($title,$text,$date);
		return true;
		//$db->queryAll();
	}

}