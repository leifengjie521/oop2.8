<?php
class Zoo{

	public $name = "小明";
	public $age = 30;

	public function fly(){

		return "正在飞……";

	}

	public function __call($name,$val){

		return $name."不存在";

	}

	public function __toString(){

		return "你好啊";

	}

	public function __clone(){

		$this -> name = "夏红";

	}

}