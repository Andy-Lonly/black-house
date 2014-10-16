<html>
<body>
<!--下面是表单哦 -->
<form method="post" id="selectinfo" action="?mode=script&action=selectinfo">
<input type="text" name="seler" value="帐号" size="15" maxlength="200" />
<br />
<br /><input type="submit" name="up" value="提交" />
<input type="reset" name="r" value="重置" />
<!--下面开始是查询程序 需要放置-->
<?php
$qq = $_POST["seler"];/* 接受表单信息 */

$blackhouseinfo = mysql_query("SELECT name,qq,lv,info FROM andyinfo WHERE qq="+$qq);/* 搜索语法 */
/* 下面将查询结果输出为表格形式展示 */
echo '<table align="center" width="84%" border="5" bgcolor="#95FFAA" bordercolor="#FFFF1E" bordercolordark="#7D7D7D">';
echo '<caption>黑屋查询信息</caption>';
echo '<th>昵称</th><th>帐号</th><th>黑屋等级</th><th>原因</th>';
/* 循环输出 */
while ($row=mysql_fethch_row($blackhouseinfo)){
	echo'<tr>';
	foreach($row as $data){
		echo '<td>'.$data.'</td>';
	}
	echo'</tr>';
}
echo'</table>';
/* 输出表单结束 */
mysql_free_result($blackhouseinfo);/* 释放内存 */
?>

<!--下面是表格预览效果图-->
<br />
<br />
<table align="center" width="84%" border="5" bgcolor="#95FFAA" bordercolor="#FFFF1E" bordercolordark="#7D7D7D">
<caption>黑屋查询信息</caption>
<th>昵称</th><th>帐号</th><th>黑屋等级</th><th>原因</th>
<tr><td>w</td><td>w1</td><td>w2</td><td>w3</td></tr>
</table>
</body>
</html>
