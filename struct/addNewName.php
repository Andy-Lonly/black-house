<form method="post" id="addNewRecForm" action="?mode=script&action=addNewRecord">
	<input type="text" name="username" placeholder="用户名" required="required"/><br>
    <input type="text" name="qqnum" placeholder="QQ号" required="required" /><br>
    <input type="number" name="level"max="3" min="0" step="1" required="required" placeholder="等级" /><br>
    <textarea form="addNewRecForm" name="reason" placeholder="原因" required="required"/><br>
    <button type="submit">提交</button>
</form>