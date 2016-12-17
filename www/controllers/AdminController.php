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
		$news = News::getAll();
		$view->items = $news;
		$view->display("news/all.php");
	}

	public function actionOne()
	{
		$view = new View();
		$id = (isset($_GET['id'])) ? $_GET['id'] : 1;
		$item = News::getOne($id);
		$view->item = $item;
		$view->display("news/one.php");
	}

	public static function actionAddNews()
	{

		if (isset($_POST['title'])) {
			$title = $_POST['title'];
			$text = $_POST['text'];
			$dat = $_POST['dat'];
			Admin::AddNews($title, $text, $dat);
		}
		header("Location: /");

	}
}

$title = $_POST['title'];
$text = $_POST['text'];
$dat = $_POST['dat'];

AdminController::actionAddNews();