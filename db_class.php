<?php
class db_class {
     private static $today="";
	 private static $startd="";
	 private static $endd="";
	 private static $type="";


	function setclass($startd,$endd,$type)
	{
 		$this->type=$type;
		$this->startd=$startd;
		$this->endd=$endd;/*
		if($_SESSION['shift']=="day" ){
		$this->startd=$startd;
		$this->endd=$endd;

		}else if($_SESSION['shift']=="night"){
					$this->type=$type;
		} */
	}



function write()
{
//echo $this->startd;
 	                    $today=date('Y-m-d');
						$db_host = 'localhost';
						$db_user = 'root';
						$db_pwd = 'maksat';

						$database = 'my_db';
						$table = 'income';
						$login_id= $_SESSION['login_id'];
//substr('abcdef', 0, 4); 
						if (!mysql_connect($db_host, $db_user, $db_pwd))
							die("Can't connect to database");

						if (!mysql_select_db($database))
							die("Can't select database");

						// sending query
						if($this->type=="all")	$query=" SELECT now() as date,SUM(fare*(CASE type when 'credit' then 0.95 when 'voucher' then 0.93 ELSE 1 end)  ) as total,count(fare) as type FROM income where  (date BETWEEN '{$this->startd} 00:00:00' AND '{$this->endd} 23:59:59') AND user=$login_id union all select date, round(fare,2),type from income where (date BETWEEN '{$this->startd}   00:00:00' AND '{$this->endd}  23:59:59') AND user=$login_id";
						else $query=" SELECT now() as date,SUM(fare*(CASE type when '{$this->type}' then (CASE '{$this->type}' when 'credit' then 0.95 when 'voucher' then 0.93 ELSE 1 end)  ELSE 0 end) )    as total FROM income where  (date BETWEEN '{$this->startd}   00:00:00' AND '{$this->endd}  23:59:59')  AND user=$login_id union all select date, round(fare,2) from income where type='{$this->type}' and   (date BETWEEN '{$this->startd}   00:00:00' AND '{$this->endd}  23:59:59') AND user=$login_id";
						
//else $query="SELECT SUM(fare*(CASE type when '{$this->type}' then (CASE '{$this->type}' when 'credit' then 0.95 when 'voucher' then 0.93 ELSE 1 end)  ELSE 0 end) )   as total FROM income where  (date BETWEEN '{$this->startd}  00:00:00' AND '{$this->endd}  23:59:59')";						
						//$query="select *from income";

						$result = mysql_query($query);
						if (!$result) {
							die("Query to show fields from table failed");
						}

						$fields_num = mysql_num_fields($result);

						echo "<h1>{$this->type}</h1>";
						
						echo "<table class='table table-striped table-bordered table-hover dataTable' style='font-family:Georgia, Garamond, Serif;color:#d9534f;'><tr>";
						// printing table headers
						for($i=0; $i<$fields_num; $i++)
						{
							$field = mysql_fetch_field($result);
							echo "<th>{$field->name}</th>";
						}
						echo "</tr>\n";
						// printing table rows
						$i=0;
						while($row = mysql_fetch_row($result))
						{
							$i++;
							echo "<tr>";

							// $row is array... foreach( .. ) puts every element
							// of $row to $cell variable
							foreach($row as $cell)
							{
								if($i==1) echo "<th>[$cell]</th>";
								else echo "<th>$cell</th>";
							}
							echo "</tr>\n";
						}
						  echo "</table>";
						mysql_free_result($result);
				
 } 

}
?>
