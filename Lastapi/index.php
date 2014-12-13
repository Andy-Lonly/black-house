<?php
/* 
000!是网页打开成功
*/
echo "000!";
require_once "class/db.php";
if($_post['0'] == '帐号'){
echo "1!";}else{
echo "0";
exit;}

if($_post['1'] == '密码 '){
echo "1!";}else{
echo "0";
exit;}

if($_post['2'] == '添加'){
$db->addinfo($_post['add'])}elseif（）
?>
