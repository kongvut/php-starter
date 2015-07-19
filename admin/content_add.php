<?php
$id=$_GET['id'];

//change action
if($id){

  $sql ="SELECT * FROM tbl_content WHERE id = '$id';";
  $res = $mysqli->query($sql);
  $dbarr = $res->fetch_assoc();
  if(!$res->num_rows){
    echo 'ไม่พบข้อมูล';
    exit;
  }

  $action = "update&id=".$id;
}else{
  $action = 'save';
}
?>
<div class="pull-left">

  <a href="?page=content_list" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span> ย้อนกลับ</a>

</div>
<br>
<hr>

<form action="?page=content_<?php echo $action; ?>" method="post">
  <div class="form-group">
    <label for="">หัวข้อบทความ</label>
    <input type="text" name="title" value="<?php echo $dbarr['title']; ?>" class="form-control" id="" placeholder="กรอกหัวข้อบทความ" required>
  </div>

  <div class="form-group">
    <label for="">เขียนโดย</label>
    <input type="text" name="createby" value="<?php echo $dbarr['createby']; ?>" class="form-control" id="" placeholder="กรอกเขียนโดย" required>
  </div>

  <div class="form-group">
    <label for="">เวลาที่ลงบทความ</label>
    <input type="date" name="createtime" value="<?php echo $dbarr['createtime']; ?>" class="form-control" id="" placeholder="กรอกเวลาที่ลงบทความ">
  </div>

  <div class="form-group">
    <label for="">เนื้อหา</label>
    <textarea name="content" class="form-control" rows="3" placeholder="กรุณากรอกเนื้อหา" required>
<?php echo $dbarr['content']; ?>
    </textarea>
  </div>

  <div class="row">
  	<div class="col-md-6">
  		<button type="submit" class="btn btn-primary btn-block">บันทึก</button>
  	</div>
  	<div class="col-md-6">
  		<button type="reset" class="btn btn-danger btn-block">ยกเลิก</button>
  	</div>
  </div>
</form>