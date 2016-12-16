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
		$view = new View();
		$view->display(__DIR__ . "/../views/news/all.php");
	}
	
	public function actionOne()
	{
		$id = $_GET['id'];
		$item = News::getOne($id);
		$view = new View();
		include __DIR__ . "
		/../views/news/one.php";
	}
}