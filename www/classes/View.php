<?php

/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 16.12.2016
 * Time: 19:53
 */
class View
{
	public function render($template, $ctrl)
	{
		ob_start();
		$items = $ctrl::getAll();
		include $template;
		$content = ob_get_contents();
		ob_end_clean();
		return $content;
	}
	public function display($template, $ctrl){
		echo $this->render($template, $ctrl);
	}
}