<?php
	header("Content-Type:text/html;charset=utf-8");
	
	/**
	 * 单例化模式
	 * @author leifengjie <1094853740@qq.com>
	 */
	 
	class Zoo{
		
		//成员属性
		public static $obj = null;
		
		//成员方法
		public static function createObj(){
			
			if(is_null(self::$obj)){
				self::$obj = new self();
			}
			
			return self::$obj;
		}
		//成员方法
		public function fly(){
			
			return "正在飞…………";
		}
		//成员方法
		public function pao(){
			
			return "正在跑…………";
		}
	} 
	//继承类
	class Bird extends Zoo{



	}
	//实例化
	$bird = Zoo::createObj();
	echo $bird -> pao();
