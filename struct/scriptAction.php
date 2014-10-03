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
	
<?php } ?>