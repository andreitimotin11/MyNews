<?php

class DB
{
	private $dbh;
	private $className = 'stdClass';
	public function __construct()
	{
		$this->dbh = new PDO('mysql:dbname=MyNews;host=localhost','root','');
	}
	public function setClassName($className){
		$this->className = $className;
	}
	public function query($sql, $params = [])
	{
		$sth = $this->dbh->prepare($sql);
		$sth->execute();
		return $sth->fetchAll(PDO::FETCH_CLASS, $this->className);
	}
	/*
	public function queryAll($sql, $class = 'stdClass')
	{
		$sql = 'SELECT * FROM news WHERE id=:id';
		$res = self::query($sql);
		echo $res;

		return $res;
	}
	
	public function queryOne($sql, $class = "stdClass")
	{
		$sql = 'SELECT * FROM news WHERE id=:id';
		$sth =$this->dbh->prepare($sql);
		$arr = [
			'id' => 1
		];
		$sth->execute($sql,$arr);
		$result = $sth->fetchAll(PDO::FETCH_OBJ);

		return $result;
	}
	
	public function insertNews($sql)
	{
		mysql_query($sql);
		return mysql_affected_rows();
	}
	*/
}