<?php

	header("Content-Type:text/html;charset=utf-8");
	 /**
	  * static 关键字  静态
	  * @author leifengjie <1094853740@qq.com>
	  */
	  
	class Car{
		
		public static $name = "布加迪";
		
		public static function pao(){
			
			return self::$name."正在飙车……";
		}
	}  
	Car::$name = "北京现代";

	echo Car::pao();