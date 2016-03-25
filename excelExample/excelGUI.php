<?php require_once("ExcelCRUD.php"); ?>
<form action="excelSave.php" method="POST">
	<table border="1">
		<?php
		$excelCrud = new ExcelCRUD();
		$rowData = $excelCrud->getData();
		for($i = 1 ; $i <= count($rowData) ; $i++) {
			if($i == 1) {
			?>
				<tr>
					<th>Name</th>
					<th>Age</th>		
					<th>Email</th>
				</tr>
			<?php } else { ?>
				<tr>
					<td><input type="text" name="name_<?php echo $i;?>" value="<?php echo $rowData[$i][0][0]; ?>"/></td>
					<td><input type="text" name="age_<?php echo $i;?>" value="<?php echo $rowData[$i][0][1]; ?>"/></td>		
					<td><input type="text" name="email_<?php echo $i;?>" value="<?php echo $rowData[$i][0][2]; ?>"/></td>
				</tr>
		<?php
			}
		}
		?>
	</table>
	<input type="submit" value="Save">
</form>