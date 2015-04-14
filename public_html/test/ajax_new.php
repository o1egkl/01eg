<?php
///// DB ////////////
require_once "db.php";

if(isset($_GET['s_id'])){
	$alb_name = $_GET['album_name'];
	$genre_id = $_GET['genre'];
	$s_arr = json_decode(stripslashes($_GET['s_id']));
	//var_dump($s_arr); exit;
	$sql = 'INSERT INTO album (name, genre_id) VALUES ('."'$alb_name',$genre_id". ')';
	$res_p = mysql_query($sql) or die(mysql_error()."<br>$sql<br>");

	$album_id =  mysql_insert_id();
	//var_dump($_GET['s_id']);exit;
	if($album_id &&  is_array($s_arr)){
		foreach ($s_arr as $k 	=> $id){
			$sql = 'INSERT INTO song_album VALUES ('."$id,$album_id".')';
			$res_p = mysql_query($sql)or die(mysql_error()."<br>$sql<br>");
		}
	}
	
	$sql = 'SELECT * FROM album ';
	$res_album = mysql_query($sql);
	echo "<table >";
	while ($dat = mysql_fetch_assoc($res_album)){
		echo '<tr><td width="85%"><a href="#" onclick="loadXMLAbum('.$dat['album_id'].'); return false"><b>'.$dat['name']."</b></a></td>".'<td><a href="#" onclick="loadXMLAbumDel('.$dat['album_id'].'); return false">Delete</a>'."</td></tr>";
	}
	echo "</table>";
	

}

?>