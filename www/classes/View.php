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
	private $position = 0;
	public $data = array();

	public function __set($k, $v)
	{
		$this->data[$k] = $v;
	}
	public function __get($k)
	{
		return $this->data[$k];
	}

	public function render($template)
	{
		foreach ($this->data as $key =>$value) {
			$$key = $value;
		}
		ob_start();
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
		$data = current($this->data);
		return $data;
	}
	public function next()
	{
		$data = next($this->data);
		return $data;
	}
	public function key()
	{
		$data = key($this->data);
		return $data;
	}
	public function valid()
	{
		$key = key($this->data);
		$data = ( $key !== NULL && $key !== FALSE);
		return $data;
	}
	public function rewind()
	{
		reset($this->data);
	}
}