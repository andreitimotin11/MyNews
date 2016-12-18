<?php

/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 08.12.2016
 * Time: 17:08
 */
abstract class AbstractModel
{
	
	protected $data = [];
	public function __set($k, $v)
	{
		$this->data[$k] = $v;
	}
	public function __get($k)
	{
		return $this->data[$k];
	}

	protected static $table;
	protected static $class;

	public static function findAll()
	{
		$class = get_called_class();
		$sql = "SELECT * FROM " . static::$table;
		$db = new DB;
		$db->setClassName($class);
		return $db->queryAll($sql, static::$class);

	}

	public static function getOne($id)
	{
		$db = new DB();
		$sql = 'SELECT * FROM ' . static::$table . ' WHERE id = ' . $id;
		return $db->queryOne($sql, static::$class);
	}
}