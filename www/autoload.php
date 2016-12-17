<?php
function __autoload($class){
//	echo __DIR__ . '/models/' . $class . '.php';
	if(file_exists(__DIR__ . '/controllers/' . $class . '.php')){
		require __DIR__. '/controllers/' . $class . '.php';
	}elseif (file_exists(__DIR__ . '/models/' . $class . '.php')){
		require __DIR__. '/models/' . $class . '.php';
	}elseif (file_exists(__DIR__ . '/classes/' . $class . '.php')){
		require __DIR__. '/classes/' . $class . '.php';
	}
}
