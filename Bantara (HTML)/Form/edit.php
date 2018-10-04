<?php
	include "koneksi.php"; //memanggil koneksi yang telah dibuat
	$query="select*from pramuka where No_Identitas='$_GET[No_Identitas]'"; //query menampilkan data dari tabel
	$result=mysql_query($query); //mengirim query ke server
	while($data=mysql_fetch_array($result)) //menampilkan/ mengambil data dalam bentuk array
	{
		$n=$data['No_Identitas'];
		$nm=$data['Nama'];
		$j=$data['Jenis_Kelamin'];
		$al=$data['Alamat'];
		$c=$data['CP'];
	}?>
<form name="edit" method="post" action="">
<table border="0" align="center" cellpadding="5">
	<tr>
		<td>NIM</td>
		<td>:<input type="text" name="No_Identitas" size="20" maxlength="15" value="<?php echo $n; ?>" readonly/></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:<input type="text" name="Nama" size="40" maxlength="30" value="<?php echo $nm; ?>"/></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<?php
		if($j=='L')
		{
		?>
		<td>:L<input type="radio" name="Jenis_Kelamin" value="L" id="jk1" checked>P<input type="radio" name="Jenis_Kelamin" value="P" id="jk2"></td>
		<?php
		}
		else
		{
		?>
		<td>:L<input type="radio" name="Jenis_Kelamin" value="L" id="jk1">P<input type="radio" name="Jenis_Kelamin" value="P" id="jk2" checked></td>
		<?php
		}?>
		<tr>
			<td>Alamat</td>
			<td>:<input type="text" name="Alamat" size="20" maxlength="15" value="<?php echo $al; ?>" /></td>
		</tr>
		<tr>
			<td>Contact Personal</td>
		<td>:<input type="text" name="CP" size="40" maxlength="30" value="<?php echo $c; ?>"/></td>
	</tr>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="simpan" value="simpan" /></td>

	</tr>
</table>
</form>	

	
<?php
extract($_POST);
include "koneksi.php";
if(isset($simpan))
{
	$input="update pramuka set Nama='$Nama', Jenis_Kelamin='$Jenis_Kelamin', Alamat='$Alamat', CP='$CP' where No_Identitas='$_GET[No_Identitas]'";
	$save=mysql_query($input);
	if($simpan)
	{
		?>
		<script language="javascript">
		alert("Data Berhasil Diupdate");
		document.location="index.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script language="javascript">
		alert("Data Gagal Diupdate");
		document.location="edit.php";
		</script>
		<?php
	}
}
?>
	