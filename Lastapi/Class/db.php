<?php
class db{
private $link;
function __construct($location,$uid,$password,$db){
mysqli_connect($location,$uid,$password,$db);
if(mysqli_connect_error()){
			echo "473";/*服务器链接失败*/
			exit;
			} else {
			$link->link = 1;
			}
		}
		
?>
