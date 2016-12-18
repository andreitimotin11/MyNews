<?php

class DB
{
	public function __construct()
	{
		$dsn = 'mysql:dbname=MyNews;host=localhost';
		$dbh = new PDO($dsn,'root', '');
		

		/*
		mysql_connect("localhost", "root", '');
		mysql_select_db('MyNews');
		*/
	}
	
	public function queryAll($sql, $class = 'stdClass')
	{
		$sql = 'SELECT * FROM news WHERE id=:id';
		$sth =$this->dbh->prepare($sql);
		$arr = [
			'id' => 1
		];
		$sth->execute($sql,$arr);
		$result = $sth->fetchAll(PDO::FETCH_OBJ);
		/*
		$res = mysql_query($sql);
		if (false === $res) {
			return false;
		}
		$ret = array();
		while ($row = mysql_fetch_object($res, $class)) {
			$ret[] = $row;
		}
		*/
		return $result;
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
		/*
		$res = mysql_query($sql);
		if (false === $res) {
			return false;
		}
		while ($row = mysql_fetch_object($res, $class)) {
			$ret = $row;
		}
		*/
		return $result;
	}
	
	public function insertNews($sql)
	{
		mysql_query($sql);
		return mysql_affected_rows();
	}
}