<div class="pull-right">

  <a href="?page=content_add" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> เพิ่มเนื้อหาใหม่</a>

</div>
<br>
<hr>

<table class="table table-hover table-bordered table-striped">
	<thead>
		<tr style="background-color : #c6c6c6;">
			<th>#</th>
			<th>ชื่อบทความ</th>
			<th>เขียนโดย</th>
			<th>วันที่เขียน</th>
			<th>อ่าน(ครั้ง)</th>
			<th>การจัดการ</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$i=1;
		$sql = "SELECT * FROM tbl_content";
		$res = $mysqli->query($sql);
		while($dbarr = $res->fetch_assoc()) {
		?>
		<tr>
			<td><?php echo $i++;?></td>
			<td><?php echo $dbarr['title'];?></td>
			<td><?php echo $dbarr['createby'];?></td>
			<td><?php echo $dbarr['createtime'];?></td>
			<td><?php echo $dbarr['total_read'];?></td>
			<td>
				<a href="?page=content_add&id=<?php echo $dbarr['id']; ?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span> แก้ไข</a>
				<a href="?page=content_del&id=<?php echo $dbarr['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><span class="glyphicon glyphicon-trash"></span> ลบ</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>