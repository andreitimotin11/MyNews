<?php
/*
 * Created by PhpStorm.
 * User: Andrei
 * Date: 08.12.2016
 * Time: 19:26
 */

class AdminController
{
	public static $title;
	public static $text;
	public static $dat;

	public function actionAll()
	{
		$view = new View();
		$view->display( __DIR__ . "/../views/news/all.php", "News");
	}

	public function actionOne()
	{
		$id = (isset($_GET['id'])) ? $_GET['id'] : 1;
		$item = News::getOne($id);
		$view = new View();
		$view->displayOne($id, __DIR__ . "
		/../views/news/one.php", "News");

	}

	public static function actionAddNews()
	{
		if (isset($_POST['title'])) {
			$title = $_POST['title'];
			$text = $_POST['text'];
			$dat = $_POST['dat'];
			Admin::AddNews($title, $text, $dat);
		}

	}
}

$title = $_POST['title'];
$text = $_POST['text'];
$dat = $_POST['dat'];

AdminController::actionAddNews();