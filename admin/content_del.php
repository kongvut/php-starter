<?php
$id = $_GET['id'];

$sql ="DELETE FROM tbl_content WHERE id = '$id';";

$res = $mysqli->query($sql) or die ($mysqli->error);

if($res){
	echo '<div class="alert alert-success h3 text-center" role="alert"><span class="glyphicon glyphicon-ok"></span> ลบเรียบร้อย</div>';
	echo '<a class="btn btn-primary btn-block" href="?page=content_list"><span class="glyphicon glyphicon-chevron-left"></span> กลับหน้าจัดการบันทึก</a>';
}else{
	echo '<div class="alert alert-danger" role="alert">มีข้อผิดพลาด บันทึกไม่สำเร็จ</div>';
}

?>