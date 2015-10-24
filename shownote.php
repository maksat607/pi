<?php
include('session.php');



?>
<?php
		
						$db_host = 'localhost';
						$db_user = 'root';
						$db_pwd = 'maksat';

						$database = 'my_db';
						$table = 'note';
//substr('abcdef', 0, 4); 
						if (!mysql_connect($db_host, $db_user, $db_pwd))
							die("Can't connect to database");

						if (!mysql_select_db($database))
							die("Can't select database");

						// sending query
						$result = mysql_query("SELECT * FROM {$table}");
						if (!$result) {
							die("Query to show fields from table failed");
						}

						$fields_num = mysql_num_fields($result);

						echo "<h1>Table: {$table}</h1>";
						
						echo "<table id='table'class='table table-striped table-bordered table-hover dataTable'><tr>";
						// printing table headers
						for($i=0; $i<$fields_num; $i++)
						{
							$field = mysql_fetch_field($result);
							echo "<td>{$field->name}</td>";
						}
						echo "</tr>\n";
						// printing table rows
						while($row = mysql_fetch_row($result))
						{
							echo "<tr>";

							// $row is array... foreach( .. ) puts every element
							// of $row to $cell variable
							foreach($row as $cell)
								echo "<td>$cell</td>";

							echo "</tr>\n";
						}
						  echo "</table>";
						mysql_free_result($result);
						
						?>
						


