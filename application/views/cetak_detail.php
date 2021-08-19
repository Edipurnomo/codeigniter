<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>ID</th>
		<th>Nomor Penerimaan</th>
		<th>Material Code</th>
		<th>Material Name</th>
		<th>Quantity</th>
		<th>Unit</th>
	</tr>

  <?php
  	$no=1;
  	foreach($Warehousedtl as $dtl): ?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $dtl->nomor_penerimaan ?></td>
		<td><?php echo $dtl->material_code ?></td>
		<td><?php echo $dtl->material_name ?></td>
		<td><?php echo $dtl->jumlah ?></td>
		<td><?php echo $dtl->unit ?></td>		
	</tr>

<?php endforeach;  ?>

</table>

<script type="text/javascript">
	window.print();
</script>

</body>
</html>