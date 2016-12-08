<?php
/*
 * Created by PhpStorm.
 * User: Andrei
 * Date: 08.12.2016
 * Time: 19:26
 */
require_once __DIR__ . "/../models/admin.php";

class AdminController
{
	public static $title;
	public static $text;
	public static $dat;

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

	public static function actionAddNews()
	{
		if (isset($_POST['title'])) {
			$title = $_POST['title'];
			$text = $_POST['text'];
			$dat = $_POST['dat'];
			Admin::AddNews($title, $text, $dat);
			header("Location: http://geekbrains/PHP2/MyNews/www/index.php?ctrl=Admin&act=All");
		} else {
			header("Location:views/news/form.php");
		}

	}
}

$title = $_POST['title'];
$text = $_POST['text'];
$dat = $_POST['dat'];

AdminController::actionAddNews();