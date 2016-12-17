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
	public function __set($k, $v)
	{
//		$this->name = $value;
		$this->data[$k] = $v;
	}
	public function __get($k)
	{
		return $this->data[$k];
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
		foreach ($this->data as $key =>$value) {
			$$key = $value;
		}
		include __DIR__ ."/../views/" . $template;

	}
	public function displayOne($template)
	{
		//echo $this->renderOne($template, $item);
		include __DIR__ ."/../views/" . $template;
	}
}