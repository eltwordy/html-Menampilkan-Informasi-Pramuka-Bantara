<form id="form1" name="form1" method="post" action="">
	<table width="39%" border="2" align="center">
		<tr>
			<td width="20%" align="center"><b>NIM</b></td>
			<td width="60%" align="center"><b>Nama</b></td>
			<td width="20%" align="center"><b>Jenis Kelamin</b></td>
			<td>Aksi</td>
		</tr>
<?php
	include "koneksi.php"; //memanggil koneksi yang telah dibuat
	$query="select*from mhs"; //query menampilkan data dari tabel
	$result=mysql_query($query); //mengirim query ke server
	while($data=mysql_fetch_array($result)) //menampilkan/mengambil data dalam bentuk array
	{
?>
		<tr>
			<td align="center"><a href="edit.php?nim=<?php echo $data['nim'];?>"><?php echo $data['nim']; ?></a></td>
			<td align="center"><?php echo $data ['nama']; ?></td>
			<td align="center"><?php echo $data ['jk']; ?></td>
			<td align="center"><a href="delete.php?nim=<?php echo $data['nim'];?>"
			onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" title="Delete Data">Delete</a></td>
		</tr>
<?php
	}
?>
	</table>
</form>
<center><a href="input.php">Tambah Data</a></center>			