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
		<th>Tanggal Penerimaan</th>
		<th>Jenis Pemasukan</th>
		<th>User Input</th>
	</tr>

  <?php
  	$no=1;
  	foreach($Warehouse as $whs): ?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $whs->nomor_penerimaan ?></td>
		<td><?php echo $whs->tanggal_penerimaan ?></td>
		<td><?php echo $whs->jenis_pemasukan ?></td>
		<td><?php echo $whs->user_input ?></td>		
	</tr>

<?php endforeach;  ?>

</table>

<script type="text/javascript">
	window.print();
</script>

</body>
</html>