<?php
class db{
private $link;
function __construct($host,$username,$password,$name){
mysqli_connect($host,$username,$password,$name);
if(mysqli_connect_error()){
			echo "473";
			} else {
			$link->link = 1;
			}
		}
		}
?>
