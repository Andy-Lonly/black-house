<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<form name="seler" method="post" action="mianseler.php">
<input type="text" name="seler" value="帐号" size="15" maxlength="200" />
<br />
<br /><input type="submit" name="up" value="提交" />
<input type="reset" name="r" value="重置" />
<?php
include(dblink.php)；
$qq = $_POST["seler"];
$sql = 'SELECT `name`, `qq`, `lv`, `info` FROM `andyinfo` WHERE `qq` = CONVERT(_utf8 \'这里放置$qq吗？<?php */?>\' USING latin1) COLLATE latin1_swedish_ci ORDER BY `lv` ASC';
/*不确定这样对不对*/
mysql_close($link);
?>
</body>
</html>
