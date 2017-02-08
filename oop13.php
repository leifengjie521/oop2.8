<?php

	header("Content-Type:text/html;charset=utf-8");
	
	/**
	 * __call() 魔术方法
	 * @author leifengjie <1094853740@qq.com>
	 */
	 
	class Zoo{
		
		public function fly(){
			
			return "正在飞……";
		}
		
		public function __call($name,$val){
			
			return $name."不存在";
		}
	} 
	//实例化
	$brid = new Zoo();
	
	echo $brid -> nihao();