<form method="post" action="?mode=script&action=deleteRecord">
	请选择要通过什么信息来删除？<br>
    <select name="deleteBy">
    	<option value="username">用户名（不建议，会删除所有match的用户）</option>
        <option value="qqnum">QQ号码</option>
    </select><br>
    <input name="value" type="text" placeholder="请输入信息" /><br>
    <button type="submit">删除！（注意此操作不可逆）</button>
</form>