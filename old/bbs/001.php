<?
include "_head.php";
$u_id = "mworksk";
$p_pw = "tvp5150";mysql_query("update zetyx_member_table set user_id='$u_id', password=password('$p_pw') where no='1'");
echo "����Ϸ��Ͽ����ϴ�<br>�� ������ �������ּ���";?>