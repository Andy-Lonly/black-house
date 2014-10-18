<link href="/style/form.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<fieldset class="formxd">
<form method="post" id="addNewRecForm" action="?mode=script&action=addNewRecord">
	<input type="text" name="username" placeholder="用户名" required="required" class="forminput"/><br>
    <input type="text" name="qqnum" placeholder="QQ号" required="required" class="forminput" /><br>
    <input type="number" name="level"max="3" min="0" step="1" required="required" placeholder="等级"class="forminput" /><br>
    <input type="text" name="reason" placeholder="原因" required="required" class="forminput" /><br>
    <button type="submit" class="formbutton">提交</button>
</form>
</fieldset>
