<?php

/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 16.12.2016
 * Time: 19:53
 */
class View
{
	public $data = array();
	public function assign($name, $value)
	{
		$this->data[$name] = $value;
	}

	public function render($template, $items)
	{
		ob_start();
		include $template;
		$content = ob_get_contents();
		ob_end_clean();
		return $content;
	}
	public function renderOne($template, $item)
	{
		ob_start();
		include $template;
		$content = ob_get_contents();
		ob_end_clean();
		return $content;
	}


	public function display($template)
	{
		//echo $this->render($template, $items);
		include __DIR__ ."/../views/" . $template;
	}
	public function displayOne($id, $template)
	{
		//echo $this->renderOne($template, $item);
		include __DIR__ ."/../views/" . $template;
	}
}