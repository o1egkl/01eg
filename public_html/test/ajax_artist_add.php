<?php
///// DB ////////////
require_once "db.php";


	if(isset($_GET['artist_name'])){
		$sql = "INSERT INTO artist (name) VALUES ('" .$_GET['artist_name']."')";
		$res = mysql_query($sql) or die(mysql_error()."<br>$sql<br>");

	}
	
	$sql = 'SELECT * FROM artist';
	$res = mysql_query($sql);
	if (mysql_num_rows($res)){
		mysql_data_seek($res,0);
		while ($dat = mysql_fetch_assoc($res)){ 
			echo '<a href="#" onclick="loadXMLDoc('.$dat['artist_id'].'); return false">'.$dat['name'].'</a><br/>';
		}
	}


?>