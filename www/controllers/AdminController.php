<?php
/*
 * Created by PhpStorm.
 * User: Andrei
 * Date: 08.12.2016
 * Time: 19:26
 */
class AdminController{
	public $title;
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
	public function addNews(){

		if(isset($_POST['name'])){

		}
	}
}