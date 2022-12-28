<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style>
tr:nth-child(1) {
font-size: 16px;
font-weight: bold;
background: red;
}

tr {
    background: yellow;
  }
  
</style>
</head>
<body>
<?php
	echo "<table border='1'>";
    include "table.csv";
	$file = fopen("table.csv","r");
	if ($file) {
		while (($data = fgetcsv($file, 0, ";")) !== false) {
			echo "<tr>";
			for ($i=0; $i < count($data); $i++) {
				echo "<td>";
				echo $data[$i] . " ";
				echo "</td>";
			}
			echo "</tr>";
		}
	}
	fclose($file);	
	echo "</table>";
?>
</body>
</html>
