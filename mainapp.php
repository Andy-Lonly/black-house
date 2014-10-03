<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>mianadd.php</title>
</head>
<body>
<form name="add" method="post" action="mianadd.php">
<input type="text" name="name" value="姓名" size="10" maxlength="200" />
<input type="text" name="qq" value="帐号" size="10" maxlength="200" />
<input type="text" name="lv" value="等级" size="10" maxlength="200" />
<input type="text" name="info" value="原因" size="10" maxlength="200" />
<br />
<br /><input type="submit" name="up" value="提交" />
<input type="reset" name="r" value="重置" />
<?php
/*缺少
登录检测板块
自动在添加时添加当前登录帐号名称模块
mysql数据库连接模块
等待补充*/
include(dblink.php)
$name = $_POST["name"];
$qq = $_POST["qq"];
$lv = $_POST["lv"];
$info = $_POST["info"];
/*判断传输数据*/
if(empty($name)||empty($qq)||empty($lv)||empty($info))
             {
           echo "有数据为空";
           exit;
             }
/*加载并输入数据库*/
$strsql="INSERT INTO andy_info(name,qq,lv,info) VALUES
('$name','$qq','$lv','$info')";
 $result = @mysql_query($strsql);
		/*判断是否成功*/
	if($result && mysql_affected_rows()>0){echo "OK";}else{echo "error，你已经添加或者数据已经存在".mysql_error();}
mysql_close($link);
?>
</body>
</html>
