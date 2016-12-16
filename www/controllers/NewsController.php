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
		$view->display(__DIR__ . "/../views/news/all.php","News");
	}
	
	public function actionOne()
	{
		$view = new View();
		$id = $_GET['id'];
		$item = News::getOne($id);
		$view->display(__DIR__ . "/../views/news/one.php","News");
		include __DIR__ . "
		/../views/news/one.php";
	}
}