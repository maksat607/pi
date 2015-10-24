
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 
Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<title>Form Input Data</title>
</head>

<body>
<table border="1">
  <tr>
    <td align="center">Form Input Income Status Data</td>
  </tr>
  <tr>
    <td>
      <table>
        <form method="post" action="input.php">

        <tr>
          <td>Fare</td>
          <td><input type="text" name="Fare" size="20">
          </td>
        </tr>
        <tr>
	  <td>
	  </td>
        </tr>
	<tr>
	  <td>Type</td>
	  <td>
	     <input type="radio" name="type" <?php if (isset($type) && $type=="credit") echo "checked";?>  value="credit">credit

   <input type="radio" name="type" <?php if (isset($type) && $type=="uber") echo "checked";?>  value="male">uber

   <input type="radio" name="type" <?php if (isset($type) && $type=="voucher") echo "checked";?>  value="male">voucher
	  </td>
	</tr>
        <tr>
          <td></td>
          <td align="right"><input type="submit" 
          name="submit" value="Sent"></td>
        </tr>
        </table>
      </td>
    </tr>
</table>
</body>
</html>
