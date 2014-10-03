<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<form name="miandelete" method="post" action="miandelete.php">
<input type="text" name="delete" value="帐号" size="15" maxlength="200" />
<br />
<br /><input type="submit" name="up" value="提交" />
<input type="reset" name="r" value="重置" />
<?php
include(dblink.php)；
/*要求删除时，删除者与数据库的adder是同一人*/
mysql_close($link);
?>
</body>
</html>
