<?php
/**
 * model数据库操作类
 * @author gewen <821263167@qq.com>
 */

class MysqlDb{
	
	//成员属性
	public $ip = "";      //操作的数据库ip地址
	public $root = "";    //数据库用户名
	public $pass = "";    //数据库密码
	public $db = "";      //数据库名称
	public $where ="";	  //查询数据的条件
	
	//需要初始化一个方法
	public function __construct($ip,$root,$pass,$db){
		
		//初始化相关数据
		$this -> ip = $ip;
		$this -> root = $root;
		$this -> pass = $pass;
		$this -> db = $db;
		
		$this -> connect();
		
	}
	
	//连接数据库方法
	public function connect(){
		
		//第一步 连接数据库
		$con = mysql_connect($this->ip,$this->root,$this->pass) or die("未连接");
		
		//第二步 选择一个数据库
		$dbname = mysql_select_db($this->db,$con);
		
		//第三步 设置字符编码
		mysql_set_charset("utf8");
		
	}
	
	//数据库查找
	public function select($table){
		
		//select * from user where id = 1;
		if(empty($this->where)){
			
			$sql = "select * from ".$table;
			
		}else{
			
			$sql = "select * from ".$table." where ".$this->where;
			
		}
		
		$re = mysql_query($sql);
		$shuju = array();
		while($row = mysql_fetch_assoc($re)){
			
			$shuju[] = $row;
			
		}
		
		return $shuju;
	}
	
	//删除数据库
	public function del($table){
		
		$sql = "delete from ".$table." where ".$this->where;
		$re = mysql_query($sql);
		return mysql_affected_rows();
		
	}
	
	
	//添加数据
	public function add($sql){
		
		$re = mysql_query($sql);
		return mysql_insert_id();
		
	}
	
	//修改
	public function edit($sql){
		
		$re = mysql_query($sql);
		return mysql_affected_rows();
		
	}
	
	//添加条件
	public function where($re){
		
		$this -> where = $re;
		
		return $this;
	}
}
 
 
/* $db = new MysqlDb("127.0.0.1","root","","mvc");
var_dump($db); */
/*
$where = $db -> where("id = 3");
$del = $db -> del("user");
var_dump($del);
*/
//链式操作
/* $re = $db -> where("id = 9") -> del("user");
var_dump($re); */
/* $re = $db -> where("id = 5") -> select("user");
var_dump($re); */

/* $re = $db -> select("select * from user");
var_dump($re);

$del = $db -> del("delete from user where id = 2");
var_dump($del);

$add = $db -> add("insert into user (name) values ('nihao')");
var_dump($add); */

/* $re = $db -> edit("update user set name = '123123123' where id = 6");
var_dump($re); */

