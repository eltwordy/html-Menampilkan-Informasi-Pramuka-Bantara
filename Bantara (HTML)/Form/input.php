<h3><center>DAFTAR CALON ANGGOTA BARU <br>
PENEGAK BANTARA</center></h3><br>
<form name="input" id="input"method="post" action="input.php">
<br><h1></h1>
<table border="0" align="center" cellpadding="5">
	<tr>
		<td>No Identitas</td>
		<td><input type="text" name="No_Identitas" id="No_Identitas" size="20" maxlength="30" /></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="Nama" size="30" id="Nama" maxlength="30" /></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>L<input type="radio" name="Jenis_Kelamin" id="Jenis_Kelamin" value="L" id="Jenis_Kelamin1">P<input type="radio" name="Jenis_Kelamin" value="P" id="Jenis_Kelamin2"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><textarea name="Alamat" rows="3" cols="40" value="" id="Jenis_Kelamin"></textarea></td>
	</tr>
	<tr>
		<td>Contact Personal</td>
		<td><input type="text" name="CP" size="30" maxlength="30" id="CP"/></td>
	</tr>
	<tr>
		<td colspan="2"align="center"><input type="submit" name="simpan" value="simpan" onclick="saveForm(); return false;"></td>
	</tr>
</table>
</form>
<script type="text/javascript">  
  function saveForm(){  
    if(document.getElementById('No_Identitas').value == ''){  
      alert('No Identitas tidak boleh kosong');  
      document.getElementById('No_Identitas').focus();  
      return false;  
    }  
    if(document.getElementById('Nama').value == ''){  
      alert('Nama tidak boleh kosong');  
      document.getElementById('Nama').focus();  
      return false;  
    }  
    if(document.getElementById('Jenis_Kelamin').value == ''){  
      alert('Jenis Kelamin tidak boleh kosong');  
      document.getElementById('Jenis_Kelamin').focus();  
      return false;  
    }  
    if(document.getElementById('Alamat').value == ''){  
      alert('Alamat tidak boleh kosong');  
      document.getElementById('Alamat').focus();  
      return false;  
    } 
	if(document.getElementById('CP').value == ''){  
      alert('Contact Personal tidak boleh di kosong kan');  
      document.getElementById('CP').focus();  
      return false;  
    } 
    document.getElementById('input').submit();  
  }  
</script>  



<?php
	extract($_POST);
	if(isset($simpan))
	{
		include "koneksi.php";
		$input="insert into pramuka values('$No_Identitas','$Nama','$Jenis_Kelamin','$Alamat','$CP')";
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