<?php

/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 16.12.2016
 * Time: 19:53
 */
class View
{
	public function render($template, $items)
	{
		ob_start();
		include $template;
		$content = ob_get_contents();
		ob_end_clean();
		return $content;
	}
	public function display($template, $ctrl)
	{
		$items = $ctrl::getAll();
		echo $this->render($template, $items);
	}
	public function displayOne($id, $template, $ctrl)
	{
		var_dump($id, $template, $ctrl);
		$item = $ctrl::getOne($id);
		echo $this->render($template, $item);
	}
}