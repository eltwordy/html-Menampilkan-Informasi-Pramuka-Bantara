<form name="input" method="post" action="input.php">
<table border="0" align="center">
	<tr>
		<td>CNIM</td>
		<td><input type="text" name="nim" size="20" maxlength="15" /></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" size="40" maxlength="30" /></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>L<input type="radio" name="jk" value="L" id="jk1">P<input type="radio" name="jk" value="P" id="jk2"></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="simpan" value="simpan"/></td>
	</tr>
</table>
</form>

<?php
	extract($_POST);
	if(isset($simpan))
	{
		include "koneksi.php";
		$input="insert into mhs values('$nim','$nama','$jk')";
		$save=mysql_query($input);
		if($save)
		{
			?>
			<script language="JavaScript">
			alert("Data Berhasil Dimasukkan");
			document.location="index.php";
			</script>
			<?php
		}
		else
		{
			?>
			<script language="JavaScript">
			alert("Data Gagal Dimasukkan");
			document.location="input.php";
			</script>
			<?php
		}
	}
?>