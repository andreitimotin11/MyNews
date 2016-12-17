<?php

/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 16.12.2016
 * Time: 19:53
 */
class View
implements Iterator
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

	public function render($template)
	{
		ob_start();
		foreach ($this->data as $key =>$value) {
			$$key = $value;
		}
		include __DIR__ ."/../views/" . $template;
		$content = ob_get_contents();
		ob_end_clean();
		return $content;
	}

	public function display($template)
	{
		//echo $this->render($template, $items);
		echo $this->render($template);
	}
	public function current()
	{
		// TODO: Implement current() method.
	}
	public function next()
	{
		// TODO: Implement next() method.
	}
	public function key()
	{
		// TODO: Implement key() method.
	}
	public function valid()
	{
		// TODO: Implement valid() method.
	}
	public function rewind()
	{
		// TODO: Implement rewind() method.
	}
}