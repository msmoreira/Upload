<html>
<title>Upload</title>
<body>
<h1>Upload de Arquivo</h1>
<form method="post" enctype="multipart/form-data" action="upload.php">
<table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
<tr>
<td width="246">
<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
<input name="userfile" type="file" id="userfile">
</td>
<td width="80"><input name="upload" type="submit" class="box" id="upload" value=" Upload "></td>
</tr>
</table>
</form>

<?php
/*
 * Created on Sep 7, 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
</body>
</html>