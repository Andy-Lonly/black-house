<?php
	require_once "class/dbHandler.php";
	$dbHandler = new blackhouse_dbHandler("主机","用户名","密码","数据库名");
	if($dbHandler->connectionError){
		echo "尝试连接数据库失败，请联系网站管理员";
		exit;	
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>黑屋系统</title>
</head>
<body>
<?php include "struct/global/header.php"; //全局Header ?>
<?php if($_GET['mode'] == false){ //啥都没有，表示是主页 ?>
	<?php include "struct/addNewName.php"; //添加新纪录的区块 ?>
    <?php include "struct/deleteRecord.php"; //删除记录的区块 ?>
<?php } elseif($_GET['mode'] == 'script') { //script代表实际要对纪录进行修改 ?>
	<?php include "struct/scriptAction.php"; //实际运行数据库程序的区块 ?>
<?php } elseif($_GET['mode'] == 'view'){ //view就是说浏览模式~ ?>
	<?php include "struct/viewRecord.php"; //查看所有记录的区块 ?>
<?php } 
elseif($_GET['mode']=='select'){//select判断搜索mod?>
       <?php include "struct/select.php";/*加载搜索页面*/ ?>
<?php}
</body>
</html>
