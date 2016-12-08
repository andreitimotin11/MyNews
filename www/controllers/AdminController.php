<?php
/*
 * Created by PhpStorm.
 * User: Andrei
 * Date: 08.12.2016
 * Time: 19:26
 */
class AdminController{
	public $title;
	public $text;
	public $date;
	public function actionAll(){
		$items = News::getAll();
		include __DIR__ . "/../views/news/all.php";
	}
	public function actionOne(){
		$id = $_GET['id'];
		$item = News::getOne($id);
		include __DIR__ . "
		/../views/news/one.php";
	}
	public static function actionAddNews(){

		if(isset($_POST['title'])){
			$title = $_POST['title'];
			$text = $_POST['text'];
			$date = $_POST['date'];

			$res = Admin::AddNews($title,$text,$date);
		}

	}
}
AdminController::actionAddNews();