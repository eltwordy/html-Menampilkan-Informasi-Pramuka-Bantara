<?php
include "koneksi.php"; //memanggil koneksi yang telah dibuat
$query="delete from pramuka where No_Identitas='$_GET[No_Identitas]'";
$delete=mysql_query($query);
if($delete)
	{
		?>
		<script language="JavaScript">
		alert("Data Berhasil Dihapus");
		document.location="index.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script language="JavaScript">
		alert("Data Gagal Dihapus");
		document.location="index.php";
		</script>
		<?php
	}
?>