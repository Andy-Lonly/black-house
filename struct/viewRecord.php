<?php
	$blackList = $dbHanlder->runQuery("SELECT * FROM andy_info","array");
?>
<h1>黑屋名单</h1>
<table>
	<tr>
    	<td style="font-weight:bold;">昵称</td>
        <td style="font-weight:bold;">QQ号</td>
        <td style="font-weight:bold;">等级</td>
        <td style="font-weight:bold;">原因</td>
    </tr>
    <?php foreach($blackList as $thisList){ ?>
    	<tr>
        	<td><?php echo $thisList['name']; ?></td>
            <td><?php echo $thisList['qq']; ?></td>
            <td><?php echo $thisList['lv']; ?></td>
            <td><?php echo $thisList['info']; ?></td>
        </tr>
    <?php } ?>
</table>