



<html>
<body>

<?php 
echo "maksat";
?>
<a href="1.php?subject=PHP&web=W3schools.com">Test $GET</a>

<?php 
echo "</br>" . $_GET['subject'] . " </br>" . $_GET['web'];

$file = 'people.txt';
// Открываем файл для получения существующего содержимого
$current = file_get_contents($file);
// Добавляем нового человека в файл
$current .= "John Smith\n";
// Пишем содержимое обратно в файл
file_put_contents($file, $current);

?>


</body>
</html>