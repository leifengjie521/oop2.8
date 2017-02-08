<?php
	header("Content-Type:text/html;charset=utf-8");

	/**
	 * 多态练习
	 * @author leifengjie <1094853740@qq.com>
	 */ 
	 
	interface Usb{
		
		public function run();//这里不用写方法体
	} 
	
	class Jianpan implements Usb{
		
		public function run(){
			
			return "键盘在打字……";
		}
	}
	
	class Shubiao implements Usb{
		
		public function run(){
			
			return "鼠标在滑动……";
		}
	}
	
	class Diannao{
		
		public function runUsb($name){
			
			$obj = $name;
			
			return $obj -> run(); 
		}
	}
	
	
	//实例化
	$diannao = new Diannao();
	echo $diannao -> runUsb(new Jianpan);
	// var_dump($diannao);
	