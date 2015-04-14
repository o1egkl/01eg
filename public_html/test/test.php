<?php
///// DB ////////////
require_once "db.php";

///////  Total songs in album
$total = 5;
$sql = "SELECT * FROM artist";
$res = mysql_query($sql);
$selected = mysql_result($res,0,'artist_id');

if(isset($_POST['s_id'])){
	$alb_name = $_POST['album_name'];
	$genre_id = $_POST['genre'];
	$sql = 'INSERT INTO album (name, genre_id) VALUES ('."'$alb_name',$genre_id". ')';
	$res_p = mysql_query($sql) or die(mysql_error()."<br>$sql<br>");

	$album_id =  mysql_insert_id();
	if($album_id){
		foreach ($_POST['s_id'] as $id){
			$sql = 'INSERT INTO song_album VALUES ('."$id,$album_id".')';
			$res_p = mysql_query($sql)or die(mysql_error()."<br>$sql<br>");
		}
	}	
	
}

$sql = 'SELECT s.*, a.name as a_name FROM song s JOIN artist a ON (s.artist_id=a.artist_id) WHERE s.artist_id=' .$selected;
$res_song = mysql_query($sql);

$sql = 'SELECT * FROM genre ';
$res_genre = mysql_query($sql);
?>
<html>
<head>
<link rel="icon" type="img/ico" href="favicon.ico">
<script type="text/javascript">
var arr = [];

function AddRemove(id, name, duration, a_name){
	var albDiv = document.getElementById('albDiv');
	var innerText = '';
	var add_flag = 1;
	for(var i=0; i<arr.length; i++) {
		if(arr[i].name == name ){
			arr.splice(i,1);
			add_flag = 0;
		}		
	}
	if(add_flag && arr.length< <?=$total;?> )
		arr.push({'id':id, 'name':name, 'duration':duration, 'a_name':a_name});
	else if (arr.length >= <?=$total;?>){	
		alert('The list is full');
		return;
	}	
	var total = 0;	
	if(arr.length>0){
		innerText = '<table width="100%"><tr><td><b>Song name:</b></td><td><b>Artist</b></td><td><b>Duration:</b></td></tr>'
		for(i=0; i<arr.length; i++) {
			//alert(arr[i].id);
			innerText += '<tr><td width="60%">' +arr[i].name + '</td><td>'+ arr[i].a_name +'</td><td>' + arr[i].duration +'<input type="hidden" name="s_id[]" value="'+ arr[i].id + '"></td></tr>';
			total =  total + parseInt(arr[i].duration);
		}	
		innerText += '<tr><td  colspan="2"><b>Total: </b></td><td><b>' + total + '</b></td></tr></table>';
	}
	albDiv.innerHTML = innerText;
}

</script>
<script type="text/javascript" src="js.js"></script>
</head>
<body>

<div style="border:0px solid; width:100%;">
	<div style="border:0px solid;width:35%;float:left;"><b>&nbsp;Albums</b></div>
	<div style="border:0px solid;width:30%;float:left;"><b>&nbsp;Songs</b></div> 
</div>
<div style="clear:both;border:0px; height:2% width:100%;"></div>
<div id="albums" style="border:1px solid;width:20%;height:14%;margin-top:10px;float:left;overflow-y:auto;overflow-x: auto;">

<?php 
$sql = 'SELECT * FROM album ';
$res_album = mysql_query($sql);
echo "<table >";
while ($dat = mysql_fetch_assoc($res_album)){
	echo '<tr><td width="85%"><a href="#" onclick="loadXMLAbum('.$dat['album_id'].'); return false"><b>'.$dat['name']."</b></a></td>".'<td><a href="#" onclick="loadXMLAbumDel('.$dat['album_id'].'); return false">Delete</a>'."</td></tr>";
}
echo "</table>";
?>
</div>
<div style="width:5%;height:50px;float:left;"></div>
<div id="albums_list" style="border:1px solid;width:40%;height:90px;margin-top:10px;float:left;overflow:auto;"></div>
<div style="clear:both;border:0px; width:72%; padding-top:30px;" ><hr></div>
<div style="border:0px;  width:100%;">
<div style="width:20%;float:left;position:relative; top: 10px; "><b>&nbsp;Artist</b></div>
<div style="width:30%;float:left;position:relative; top: 10px; left:10px;"><b>&nbsp;Songs</b></div> 
<div style="width:30%;float:left;position:relative; top: 10px; left:20px;"><b>&nbsp;Create Album - max <?=$total; ?> songs</b></div>
</div>
<div style="clear:both;border:1px; width:100%; height:10px; position:relative;"></div>
<!-- <form name="frm" id="frm" action="test.php" method="POST"> -->
<div style="width:20%; height:19%;border: 1px solid; float:left;position:relative;overflow:auto;" id="artist">
<?php
mysql_data_seek($res,0);
while ($dat = mysql_fetch_assoc($res)){ 
	echo '<a href="#" onclick="loadXMLDoc('.$dat['artist_id'].'); return false">'.$dat['name'].'</a><br/>';
}
?>
</div>
<div id="songDiv" style="width:20%; height:19%;border: 1px solid; float:left; position:relative; left:10px;overflow:auto;" >

<?php
if (mysql_num_rows($res_song)){
	mysql_data_seek($res_song,0);
	while ($dat = mysql_fetch_assoc($res_song)){ 
		echo '<a href="#" onclick="AddRemove('.$dat['song_id'].",'".$dat['name']."','".$dat['duration']."','".$dat['a_name']. "'); return false;".'">'.$dat['name'].'</a><br/>';
	}
}
?>
</div>
<div name="albDiv" id="albDiv" style="width:30%; height:25%;border:1px solid; float:left; position:relative;left:20px;overflow:auto;" >
</div>
<div style="clear:both;border:0px;  width:100%;">

<div style="width:30%;float:left;position:relative; top: 10px; ">Add Album Name&nbsp;<input type="text" name="album_name" id="album_name"	></div>
<div style="width:30%;float:left;position:relative; top: 10px; ">Select Genre: 
<select id="genre" class="genre" name="genre">
<?php
while ($dat = mysql_fetch_assoc($res_genre)){
		echo '<option value="'.$dat['genre_id'].'">'.$dat['description'].'</option>';
}
?>
</select>
</div>
<div style="width:30%;float:left;position:relative; top: 10px; ">
<input type="button" value="Clear List" onclick="ClearList();"/>&nbsp;<input type="button" value="Create Album" onclick="AddAlbum();return false;"/>
</div>
</div>
<!-- </form> -->
<div style="clear:both;border:0px; padding-top:30px;width:72%;" ><hr></div><H3>Add artist</H3>
<div style="border:0px solid; width:90%;height:7%;padding:10px;">
	<div style="width:25%;float:left;"id="AddArtistDiv">
		<b>Write artist name</b>&nbsp;<input type="text" onkeyup="showResult(this.value)" id="artist_input"></input>&nbsp;<input type="button" id="add_artist" value=" Add "style="visibility:hidden;" onclick="AddArtist();"></input><input type="hidden" value="0" id="exist"></input>
		<div id="livesearch" style="border:0px solid;"></div>
	</div>
	<div style="width:35%;float:left;visibility:hidden;" id="AddSongDiv">
		<b>Add Song</b>&nbsp;<input type="text" onkeyup="showResult2(this.value)"  id="song_input" disabled ></input>&nbsp;&nbsp;&nbsp;<b>Duration (sec.)</b>&nbsp;<input type="text" style="width:30px;" id="duration" onkeyup="showResult3(this.value)" disabled=true></input>
		<div id="livesearch2" style="border:0px solid;"></div>
	</div>
	<div style="width:10%;float:left;visibility:hidden;" id="AddSongBDiv"><input type="button" value="ADD" id="add_song" onclick="AddSong();" disabled=true></input></div>
</div>
</div>
</body>
</html>