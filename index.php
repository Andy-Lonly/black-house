<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>黑屋系统</title>
<link rel="stylesheet" type="text/css" href="style/main.css"/>
<link href="style/form.css" rel="stylesheet" type="text/css"/>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<?php
	require_once "class/dbHandler.php";
	$dbHandler = new blackhouse_dbHandler("localhost","root","1a2B3c4E?///","blackHouse");
	if($dbHandler->connectionError){
		echo "尝试连接数据库失败，请联系网站管理员";
		exit;	
	}
?>

<?php include "struct/global/header.php"; //全局Header
if($_GET['mode'] == false){ //啥都没有，表示是主页  
 } elseif($_GET['mode'] == 'script') { //script代表实际要对纪录进行修改 
	include "struct/scriptAction.php"; //实际运行数据库程序的区块 
 } elseif($_GET['mode'] == 'view'){ //view就是说浏览模式~
	include "struct/viewRecord.php"; //查看所有记录的区块 
 } elseif($_GET['mode']=='select'){//select判断搜索mod
    include "struct/select.php";/*加载搜索页面*/}
 elseif($_GET['mode']=='add'){//select判断搜索mod
    include "struct/addNewName.php";/*加载搜索页面*/}
 elseif($_GET['mode']=='delete'){//select判断搜索mod
    include "struct/deleteRecord.php";/*加载搜索页面*/}	?>
</body>
</html>
