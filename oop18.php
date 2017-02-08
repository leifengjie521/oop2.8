<?php 

	header("Content-Type:text/html;charset=utf-8");
	/**
	 * __toString() 魔术方法 
	 * 介绍这个类有哪些个方法，有哪些个属性，这个是做什么用的
	 * @author leifengjie <1094853740@qq.com>
	 */
	//写一个类
	class Zoo{
		//成员方法
		public function fly(){
			
			return "正在飞…………";
			
		}
		//把魔术方法__call加到成员方法内
		public function __call($name,$val){
			
			return $name."不存在";
		}
		//把魔术方法__toString加到成员方法内
		public function __toString(){
			
			return "存在了";
		}
		
	} 
	echo $bird = new Zoo();