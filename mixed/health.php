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
    <td align="center">Form Input Health Status Data</td>
  </tr>
  <tr>
    <td>
      <table>
        <form method="post" action="input.php">
        <tr>
          <td>Pressure</td>
          <td><input type="text" name="pressure" size="20">
          </td>
        </tr>
        <tr>
          <td>Pulse</td>
          <td><input type="text" name="pulse" size="20">
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
