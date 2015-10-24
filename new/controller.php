<?php
if ( file_get_contents('test.txt') == 'exit' )
{
	file_put_contents('test.txt', '1');
}
if ( $_GET['get'] == 1 )
{
	echo "inside get";

	if ( $_GET['red'] == 1 )
	{
		file_put_contents('test.txt', '0');
		echo "inside red";
	}
	else if ( $_GET['green'] == 0 )
	{
		file_put_contents('test.txt', '1');
		echo "inside green";
	}


}
echo '
<html>
	<head>
		<title>LED Controller</title>
	</head>
<body>';


echo '
<div style="width: 100%; height: 100%;">

<a href="controller.php?red=1&get=1" style="text-decoration: none; color: #000000;">
	<img src="red.png" border="0">
</a><br>
<a href="controller.php?green=0&get=1" style="text-decoration: none; color: #000000;">
	<img src="green.png" border="0">
</a><br>
<a href="controller.php?blue=1&get=1" style="text-decoration: none; color: #000000;">
	<img src="blue.png" border="0">
</a>

</div>

</body>
</html>';
?>
