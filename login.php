<?php include('header.php') ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<div class="bingkai jarak_atas">
	<div class="judul">Masuk</div>
    <form action="aksi_login.php" method="post">
    	<table width="327" border="0" align="center" class="jarak_atas">
          <tr>
            <td width="89" height="51"><strong>Username</strong></td>
            <td width="222"><input type="text" name="username" placeholder="Username" class="tulisan" required /></td>
          </tr>
          <tr>
            <td height="52"><strong>Password</strong></td>
            <td><input type="password" name="password" placeholder="Password" class="tulisan" required /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" class="tombol" value="Masuk" /></td>
          </tr>
        </table>
    </form>

</div>

<div class="bingkai jarak_atas">
	<strong>Belum Memiliki Akun ? </strong><br /><br />

	<a href="register.php" class="tombol">Klik disini</a>
</div>

<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<?php include('footer.php') ?>