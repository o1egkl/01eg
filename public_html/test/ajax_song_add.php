<?php
///// DB ////////////
require_once "db.php";

if(isset($_GET['artist_id']) && isset($_GET['song']) && isset($_GET['duration']) ){
	$selected = intval($_GET['artist_id']);
	$duration = intval($_GET['duration']);
	$song = ($_GET['song']);
	$sql = 'INSERT INTO song (artist_id,name,duration) VALUES (' .$selected.",'".$song."',".$duration.')';
	$res = mysql_query($sql) or die(mysql_error()."<br>$sql<br>");
	$sql = 'SELECT s.*, a.name as a_name FROM song s JOIN artist a ON (s.artist_id=a.artist_id) WHERE a.artist_id=' .$selected;
	$res_song = mysql_query($sql);
	if (mysql_num_rows($res_song)){
		mysql_data_seek($res_song,0);
		while ($dat = mysql_fetch_assoc($res_song)){
			echo '<a href="#" onclick="AddRemove('.$dat['song_id'].",'".$dat['name']."','".$dat['duration']."','".$dat['a_name']. "'); return false;".'">'.$dat['name'].'</a><br/>';
		}
	}
}

?>