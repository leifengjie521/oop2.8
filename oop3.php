<?php

	header("Content-Type:text/html;charset=utf-8");
	
	/**
	 * 回顾之前的知识
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
		public function fly(){
			
			return $this->name."正在飞……";
		}
	}
	
	//抽象类
	
	abstract class Brid{

		//成员属性
		
		public $age;
		
		//成员方法
		
		public function pao(){
			
			return "正在飞……";
		}
		
		abstract function pa();// 抽象类没有方法体
	}
	
	
	//接口
	interface pig{
		
		const NAME = "小猪";
		
		public function heng();//接口没有方法体
	}
	//实例化
	$obj = new Zoo("来福");
	
	echo $obj -> fly();