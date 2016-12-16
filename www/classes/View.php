<?php

/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 16.12.2016
 * Time: 19:53
 */
class View
{
	public function render($template)
	{
		ob_start();
		$items = News::getAll();
		include $template;
		$content = ob_get_contents();
		ob_end_clean();
		return $content;
	}
	public function display($template){
		echo $this->render($template);
	}
}