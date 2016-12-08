<?php

/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 08.12.2016
 * Time: 17:08
 */
abstract class AbstractModel
{
	protected static $table;
	protected static $class;

	public static function getAll(){
		$db = new DB;
		$sql = "SELECT * FROM " . static::$table;
		return $db->queryAll($sql, static::$class);

	}
	public static function getOne($id){
		$db =  new DB();
		$sql = 'SELECT * FROM ' . static::$table . ' WHERE id = ' . $id ;
		return $db->queryOne($sql,static::$class);
	}
	public static function insertNews($title, $text, $dat){
		$db = new DB;
		$sql = "INSERT INTO " . static::$table . " (id, title, text, dat) VALUES (NULL, ". $title . ", " . $text . ", " . $dat;
		return $db->queryAll($sql, static::$class);

	}
}