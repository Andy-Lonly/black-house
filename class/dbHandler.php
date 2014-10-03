<?php
	/*
		数据库控制Class，这个一般在程序头都会创建一个Instance
		Copyright © Niyume 2014
		程序 by ふらいぐぶる
	*/
	class blackhouse_dbHandler {
		private $connectionIdentifier;
		public $connectionError;
		
		function __costruct($host,$username,$password,$name){
			//Constructor, 在这里就连接数据库了
			//请通过使用$this->connectionError检测是否失败
			$this->connectionIdentifier = mysqli_connect($host,$username,$password,$name);
			if(mysqli_connect_error()){
				$this->connectionError = true;
			} else {
				$this->connectionError = false;
			}
		}
		
		public function runQuery($query,$resultType){
			//用来运行Query的Method
			//Result Type是返回的结果类型，可以选择：array、insertid或者bool还有numrows
			$dbResult = mysqli_query($this->connectionIdentifier,$query);
			if($dbResult){
				if($resultType == 'array'){
					$returnArray = array();
					while ($row = mysqli_fetch_array($dbResult)){
						array_push($returnArray,$row);
					}
					return array("val"=>$returnArray);
				} elseif ($resultType == 'insertid') {
					return array("val"=>mysqli_insert_id());
				} elseif ($resultType == 'bool') {
					return true;	
				} elseif ($resultType == 'numrows') {
					return mysqli_num_rows($dbResult);	
				}
			} else {
				return false;	
			}
		}
	}
?>