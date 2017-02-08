<?php
	header("Content-Type:text/html;charset=utf-8");
	/**
	 * 多态练习
	 * @author leifengjie <1094853740@qq.com>
	 */ 
interface Car{

	public function pao();

}

class Falali implements Car{

	public function pao(){

		return "法拉利正在狂飙……";

	}

}

class Benchi implements Car{

	public function pao(){

		return "这辆奔驰正在飞奔…………";

	}

}

class Qiche{

	//$name传的是一个对象
	public function paoCar($name){

		//$obj = new Jianpan;
		$obj = $name;
		return $obj -> pao();

	}

}

//实例化一个Computer类
$qiche = new Qiche();

echo $qiche -> paoCar(new Falali);