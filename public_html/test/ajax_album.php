<?php
///// DB ////////////
require_once "db.php";

if($_GET['album_id']){
	$selected = intval($_GET['album_id']);
	if(isset($_GET['del']) && $_GET['del']=='yes'){
		$sql = 'DELETE FROM album WHERE album_id=' .$selected;
		$res = mysql_query($sql) or die(mysql_error()."<br>$sql<br>");
		$sql = 'SELECT * FROM album';
		$res_album = mysql_query($sql) or die(mysql_error()."<br>$sql<br>");
		echo "<table >";
		while ($dat = mysql_fetch_assoc($res_album)){
			echo '<tr><td width="85%"><a href="#" onclick="loadXMLAbum('.$dat['album_id'].'); return false"><b>'.$dat['name']."</b></a></td>".'<td><a href="#" onclick="loadXMLAbumDel('.$dat['album_id'].'); return false">Delete</a>'."</td></tr>";
		}
		echo "</table>";
	}
	else{
		$sql = 'SELECT sa.*, s.* , a.name as album_name,genre_id, ar.name as artist_name FROM song_album sa join song s on (s.song_id=sa.song_id)  join album a on (sa.album_id=a.album_id) join artist ar on (s.artist_id=ar.artist_id) WHERE sa.album_id=' .$selected;
		//echo $sql; exit;
		$res = mysql_query($sql);
		$total=0;
		if (mysql_num_rows($res)){
			mysql_data_seek($res,0);
			echo  '<table width="100%"><tr><td><b>Song name:</b></td><td><b>Artist</b></td><td><b>Duration:</b></td></tr>';
			 while ($dat = mysql_fetch_assoc($res)){ 
				echo '<tr><td width="60%">' .$dat['name'] . '</td><td>'.$dat['artist_name'] .'</td><td>' . $dat['duration']. '<input type="hidden" name="s_id[]" value="'. $dat['song_id'].  '"></td></tr>';
			 	//echo $dat['name'].'<br/>';
			 	$total +=  $dat['duration'];
			} 
			echo '<tr><td  colspan="2"><b>Total: </b></td><td><b>' .$total . '</b></td></tr></table>';
		}	
	}
}	
?>