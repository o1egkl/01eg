<?php
///// DB ////////////
require_once "db.php";

if($_GET['artist_id']){
	$selected = intval($_GET['artist_id']);	
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