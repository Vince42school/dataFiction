<?php 
$fp = fopen("data.csv","w+");
fputs($fp, "year,month,day,heure,pression,latitude,longitude\n");
for ($i = 0; $i < 1000;$i++) {
	fputs($fp, "2016,");
	fputs($fp, (strval(rand(1,12)) . ","));
	fputs($fp, (strval(rand(1,31)) . ","));
	fputs($fp, (strval(rand(1,24)) . ","));
	fputs($fp, (strval(rand(1020,1030)) . ","));
	fputs($fp, (strval(rand(0,90)) . ",\n"));
}
?>
