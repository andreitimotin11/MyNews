<?php

/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 06.12.2016
 * Time: 18:09
 */
class NewsController
{
	public function actionAll()
	{
		$items = News::getAll();
		include __DIR__ . "/../views/news/all.php";
	}
	
	public function actionOne()
	{
		$id = $_GET['id'];
		$item = News::getOne($id);
		include __DIR__ . "
		/../views/news/one.php";
	}
}