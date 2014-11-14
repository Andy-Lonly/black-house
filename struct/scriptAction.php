<?php if($_GET['action'] == 'addNewRecord'){ ?>
	<?php if(!$_POST['username'] || !$_POST['qqnum'] || !$_POST['level'] || !$_POST['reason']){ ?>
    	<b>很抱歉，您填写的信息不完整</b><br>
    <?php } else { ?>
    	<?php
			//这里做防止injection的处理
			$insertUsername = filter_var($_POST['username'], FILTER_SANITIZE_MAGIC_QUOTES);
			$insertQQ = filter_var($_POST['qqnum'], FILTER_SANITIZE_MAGIC_QUOTES);
			$insertLevel = filter_var($_POST['level'], FILTER_SANITIZE_MAGIC_QUOTES);
			$insertReason = filter_var($_POST['reason'], FILTER_SANITIZE_MAGIC_QUOTES);
		?>
        <?php if($dbHandler->runQuery("SELECT FROM andy_info WHERE qq='$insertQQ'","numrows")){ ?>
				<b>对不起，该QQ号已经存在</b><br>
		<?php } else { ?>
			<?php if($dbHandler->runQuery("INSERT INTO andy_info (name,qq,lv,info) VALUES ('$insertUsername','$insertQQ','$insertLevel','$insertReason')","bool")){ ?>
                <b>成功添加了用户信息</b><br>
            <?php } else { ?>
                <b>出现未知错误，添加失败</b><br>
            <?php } ?>
        <?php } ?>
    <?php } ?>
    <a href="<?php echo $_SERVER['HTTP_REFERER'];?>">返回上一页</a>
<?php } ?>

<?php if($_GET['action'] == 'deleteRecord'){ ?>
	<?php if(!$_POST['deleteBy'] || !$_POST['value']){ ?>
    	<b>很抱歉，您填写的信息不完整</b><br>
    <?php } else { ?>
    	<?php
			/*if($_POST['deleteBy'] == 'username'){
				$columnSub = 'username';
			} elseif ($_POST['deleteBy'] == 'qqnum'){
				$columnSub = 'qq';
			}
			$result = $dbHandler->runQuery("DELECT FROM andy_info WHERE $columnSub='$_POST[value]'","affectedrows");
		?>
        <?php if($result) { ?>
        	<b>成功，总共删除了<?php echo $result; ?>条记录</b><br>
        <?php } else { ?>
        	<b>失败，请检查您输入的信息是否有误</b><br>
        <?php } ?> 修改*/
		
            $result = $dbHandler->runQuery("DELECT FROM andy_info WHERE 'qq'='$_POST[value]'","affectedrows");
		?>
        <?php if($result) { ?>
        	<b>成功，总共删除了<?php echo $result; ?>条记录</b><br>
        <?php } else { ?>
        	<b>失败，请检查您输入的信息是否有误</b><br>
        <?php } ?>
    <?php } ?>
    <a href="<?php echo $_SERVER['HTTP_REFERER'];?>">返回上一页</a>
<?php } ?>

<?php if($_GET['action']=='selectinfo'){/*后面放置搜索程序*/

$qq = $_POST["seler"];/* 接受表单信息 */

if($_POST['seler'] == false){echo '<br>请填写查询对象' ;
  } else{
/* 下面将查询结果输出为表格形式展示 */
echo '<table align="center" width="84%" border="5" bgcolor="#95FFAA" bordercolor="#FFFF1E" bordercolordark="#7D7D7D">';
echo '<caption>黑屋查询信息</caption>';
echo '<th>昵称</th><th>帐号</th><th>黑屋等级</th><th>原因</th>';
/* 循环输出 */
$dbHandler->runQuery("SELECT name,qq,lv,info FROM andyinfo WHERE qq='$qq'","rows");
echo'</table>';
/* 输出表单结束 */
}
?>
