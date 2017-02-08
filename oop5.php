<?php
	header("Content-Type:text/html;charset=utf-8");
	/**
	 * 多态练习
	 * @author leifengjie <1094853740@qq.com>
	 */ 
interface Usb{

	public function run();

}

class Jianpan implements Usb{

	public function run(){

		return "这个键盘正在打字……";

	}

}

class Shubiao implements Usb{

	public function run(){

		return "这个鼠标正在滑动……";

	}

}

class Computer{

	//$name传的是一个对象
	public function runUsb($name){

		//$obj = new Jianpan;
		$obj = $name;
		return $obj -> run();

	}

}

//实例化一个Computer类
$computer = new Computer();

echo $computer -> runUsb(new Jianpan);