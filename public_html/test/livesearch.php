<?php
///// DB ////////////
require_once "db.php";

if(isset($_GET['artist'])){
	$selected = $_GET['artist'];
	if(isset($_GET['song'])){
		$song = $_GET['song'];
		$sql = 'SELECT * FROM song WHERE artist_id=(SELECT artist_id FROM artist WHERE name= \''.$selected.'\') AND song.name LIKE \'' .$song.'%\'	';
		$res = mysql_query($sql);
		if (mysql_num_rows($res)){
			mysql_data_seek($res,0);
			while ($dat = mysql_fetch_assoc($res)){
				echo'<a href="#" onclick="selectSong(\''. $dat['name'].'\');return false">'. $dat['name'].'</a><br/>';
			}
		}else{
			echo "ZERO";
		}
	}
	else{
		
		$sql = 'SELECT * FROM artist WHERE name LIKE \'' .$selected.'%\'	';
		$res = mysql_query($sql);
		if (mysql_num_rows($res)){
			mysql_data_seek($res,0);
			while ($dat = mysql_fetch_assoc($res)){
				echo'<a href="#" onclick="selectArtist(\''. $dat['name'].'\','. $dat['artist_id'].');return false">'. $dat['name'].'</a><br/>';
			}
		}else{
			echo "ZERO";
		}
	}	
}


?>