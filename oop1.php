<?php
	header("Content-Type:text/html;charset=utf-8");

	/**
	 * 复习前面学的知识
	 * @author leifengjie <1094853740@qq.com>
	 */
	//抽象一个普通类
	class Zoo{
		
		//成员属性
		
		public $name;
		//成员方法
		
		public function __construct($name){
			
			$this->name = $name;
		}
		
		public function pao(){
			
			return $this->name."正在跑……";
		}
	} 
	//抽象类
	abstract class Brid{
		//成员属性
		
		public $age;
		
		//成员方法
		
		public function fly(){
			
			return "正在飞……";
		}
		abstract function chi();//抽象类没有方法体 在子类中写方法
		
	}
	
	
	//接口
	interface Dog{
		const NAME = "小狗";
		
		public function wang();//接口没有方法体 
	}
	
	$obj = new Zoo("旺财");
	
	echo $obj -> pao();
	
	
	
	
	