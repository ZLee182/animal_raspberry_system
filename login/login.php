<?php
    error_reporting(0);
	$link=mysql_connect("localhost","root1","root1") or die("���ݿ�����ʧ��");//���ӷ����������ݿ�
	mysql_select_db("animaldesign",$link) or die("��ѡ��ʧ��");//ѡ��������ݿ�
	mysql_query("set names utf8");//���������ֵ���룬���ı���
	
	$sql="SELECT id FROM manager WHERE (name='$_POST[username]') AND (psd='$_POST[passwd]') limit 1";//sql���
	$query=mysql_query("$sql");//���ز��������ݣ�true,false.
	//$a=mysql_fetch_row($query,MYSQL_ASSOC);
	echo "$a=mysql_fetch_row($query,MYSQL_ASSOC)";
	if($a=mysql_fetch_row($query,MYSQL_ASSOC))
	{
		Header('Location: index.php');
	}
	else{
		//echo "<script>alert('��¼ʧ�ܣ��˺Ż�������������µ�¼');</script>";
	    Header('Location:	index.html ');
	}
?>
