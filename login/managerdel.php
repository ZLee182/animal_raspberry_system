<?php
    error_reporting(0);
	$link=mysql_connect("localhost","root1","root1") or die("ʧ��".mysql_error());
	mysql_select_db("animaldesign",$link) or die("��ѡ��ʧ��");//ѡ��������ݿ�
	mysql_query("set names utf8");//���������ֵ���룬���ı���
	//mysql_query("SET NAMES 'GB2312'");
    $sql="delete  from manager where (id='$_POST[id]')";
	
	$query=mysql_query("$sql");//�������뵽���ݿ��У����ز��������ݣ�true,false.
	
	if($query){
		echo "<script>alert('�ɹ�');</script>";
		Header('Location:index.php');
		
	}
	else{
		echo "<script>alert('ʧ��');</script>";
		Header('Location: index.php');
	}
?>