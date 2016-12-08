<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 08.12.2016
 * Time: 19:59
 */
class Admin{
	public $id;
	public $title;
	public $text;
	public $date;
	public static function getAll(){
		$db = new DB;
		return $db->queryAll("SELECT * FROM news", "News");
	}
	public static function getOne($id){
		$db =  new DB();
		return $db->queryOne('SELECT * FROM news WHERE id = ' . $id, 'News');
	}
	public static function AddNews($title,$text,$date){
		$db =  new DB();

		$db->insertNews($title,$text,$date);
		//$db->queryAll();
	}

}