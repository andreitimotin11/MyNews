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
		$items = News::getAll();
		$view->assign('items', $items );
		$view->display("news/all.php");
	}
	
	public function actionOne()
	{
		$view = new View();
		$id = (isset($_GET['id'])) ? $_GET['id'] : 1;
		$item = News::getOne($id);		
		$view->displayOne( __DIR__ . "/../views/news/one.php","News");
	}
}