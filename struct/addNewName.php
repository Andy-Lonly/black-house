<form method="post" id="addNewRecForm" action="?mode=script&action=addNewRecord">
	<input type="text" name="username" placeholder="用户名" /><br>
    <input type="text" name="qqnum" placeholder="QQ号" /><br>
    <input type="number" name="level"max="3" min="0" step="1" required="required" placeholder="等级" /><br>
    <textarea form="addNewRecForm" name="reason" placeholder="原因" /><br>
    <button type="submit">提交</button>
</form>