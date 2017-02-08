<?php

	header("Content-Type:text/html;charset=utf-8");
	 /**
	  * final关键词 最终
	  * @author leifengjie <1094853740@qq.com>
	  */
	final class Zoo{
		
		public function fly(){
			return "正在飞……………………";
		}
	}  
	//继承类
	/* class Brid extends Zoo{
		
	} */
	//实例化
	// $brid = new Brid();  输出会报错  Fatal error: Class Bird may not inherit from final class (Zoo)  是不能被继承的的 因为 final关键词 是最终的意思 无法继承最终的类
	$brid = new Zoo();
	echo $brid -> fly();