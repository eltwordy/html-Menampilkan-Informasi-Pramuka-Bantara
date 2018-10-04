<h3><center>DAFTAR CALON ANGGOTA BARU <br>
PENEGAK BANTARA</center></h3><br>
<form id="form1" name="form1" method="post" action="">
	<table width="100%" border="2" align="center" cellpadding="3">
		<tr>
			<td width="15%" align="center"><b>No Identitas</b></td>
			<td width="25%" align="center"><b>Nama</b></td>
			<td width="10%" align="center"><b>Jenis Kelamin</b></td>
			<td width="30%" align="center"><b>Alamat</b></td>
			<td width="25%" align="center"><b>Contact Personal</b></td>
			<td>Aksi</td>
		</tr>
<?php
	include "koneksi.php"; //memanggil koneksi yang telah dibuat
	$query="select*from pramuka"; //query menampilkan data dari tabel
	$result=mysql_query($query); //mengirim query ke server
	while($data=mysql_fetch_array($result)) //menampilkan/mengambil data dalam bentuk array
	{
?>
		<tr>
			<td align="center"><a href="edit.php?No_Identitas=<?php echo $data['No_Identitas'];?>"><?php echo $data['No_Identitas']; ?></a></td>
			<td align="center"><?php echo $data ['Nama']; ?></td>
			<td align="center"><?php echo $data ['Jenis_Kelamin']; ?></td>
			<td align="center"><?php echo $data ['Alamat']; ?></td>
			<td align="center"><?php echo $data ['CP']; ?></td>
			<td align="center"><a href="delete.php?No_Identitas=<?php echo $data['No_Identitas'];?>"
			onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" title="Delete Data">Delete</a></td>
		</tr>
<?php
	}
?>
	</table>
</form>
<center><a href="input.php">DAFTAR ANGGOTA BARU</a></center>			