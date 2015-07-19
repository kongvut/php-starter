<div class="pull-left">

  <a href="?page=content_list" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span> ย้อนกลับ</a>

</div>
<br>
<hr>

<form action="?page=content_save" method="post">
  <div class="form-group">
    <label for="">หัวข้อบทความ</label>
    <input type="text" name="title" class="form-control" id="" placeholder="กรอกหัวข้อบทความ">
  </div>

  <div class="form-group">
    <label for="">เขียนโดย</label>
    <input type="text" name="createby" class="form-control" id="" placeholder="กรอกเขียนโดย">
  </div>

  <div class="form-group">
    <label for="">เวลาที่ลงบทความ</label>
    <input type="date" name="createtime" class="form-control" id="" placeholder="กรอกเวลาที่ลงบทความ">
  </div>

  <div class="form-group">
    <label for="">เนื้อหา</label>
    <textarea name="content" class="form-control" rows="3" placeholder="กรุณากรอกเนื้อหา"></textarea>
  </div>

  <div class="row">
  	<div class="col-md-6">
  		<button type="submit" class="btn btn-primary btn-block">บันทึก</button>
  	</div>
  	<div class="col-md-6">
  		<button type="submit" class="btn btn-danger btn-block">ยกเลิก</button>
  	</div>
  </div>
</form>