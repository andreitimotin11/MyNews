<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 04.12.2016
 * Time: 19:23
 */

class News{
	public $id;
	public $title;
	public $text;
	public static function getAll(){
		$db = new DB;
		return $db->queryAll("SELECT * FROM news", "News");
	}
	public static function getOne($id){
		$db =  new DB();
		return $db->queryOne('SELECT * FROM news WHERE id = ' . $id, 'News');
	}
}