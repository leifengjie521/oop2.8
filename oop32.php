<?php

	header("Content-Type:text/html;charset=utf-8");
	
	/**
	 * 手动加载
	 * @author leifengjie <1094853740@qq.com>
	 */
	 
	include("Zoo.php"); 
	
	$bird = new Zoo();
	echo $bird -> fly(); 