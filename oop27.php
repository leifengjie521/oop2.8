<?php

	header("Content-Type:text/html;charset=utf-8");
	/**
	 * 自动加载
	 * @author leifengjie <1094853740@qq.com>
	 */
	 
	
	function __autoload($name){

		//var_dump($name);
		include("./".$name.".php");
	}

	$bird = new Bird();
	echo $bird -> fly();