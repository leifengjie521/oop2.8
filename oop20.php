<?php

	header("Content-Type:text/html;charset=utf-8");
	/**
	 * __clone() 魔术方法
	 * @author leifengjie <1094853740@qq.com>
	 */
	class Zoo{
		
		//成员属性
		public $name = "小明";
		public $age = 30;
		
		//成员方法
		public function fly(){
			
			return "正在飞…………";
		}
		
		//加入魔术方法__call 重载
		public function __call($name,$val){
			
			return $name."不存在";
		}
		
		//加入魔术方法__toString 是快速获取对象的字符串信息的便捷方式
		public function __toString(){
			
			return "你咋不上天";
		}
		
		//加入魔术方法__clone 复制  克隆
		
		public function __clone(){
			$this -> name ="哈哈";
			
		}
	}
	
	$bird = new Zoo();
	var_dump($bird);
	$dog = clone $bird;
	var_dump($dog);