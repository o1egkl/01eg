<?
///// DB ////////////
require_once "db.php";

///////  Total songs in album
$total = 5;
$sql = "Select * from artist";
$res = mysql_query($sql);
$selected = mysql_result($res,0,'id');
if($_POST[s_id]){
	$alb_name = $_POST[album_name];
	$genre_id = $_POST[genre];
	$sql = 'INSERT INTO album (name, genre_id) VALUES ('."'$alb_name',$genre_id". ')';
	$res_p = mysql_query($sql) or die(mysql_error()."<br>$sql<br>");

	$album_id =  mysql_insert_id();
	if($album_id){
		foreach ($_POST[s_id] as $id){
			$sql = 'INSERT INTO song_album VALUES ('."$id,$album_id".')';
			$res_p = mysql_query($sql)or die(mysql_error()."<br>$sql<br>");
		}
	}	
	
}

$sql = 'SELECT s.*, a.name as a_name FROM song s JOIN artist a ON (s.artist_id=a.id) WHERE artist_id=' .$selected;
$res_song = mysql_query($sql);

$sql = 'SELECT * FROM genre ';
$res_genre = mysql_query($sql);
?>
<html>
<head>
<script type="text/javascript">
var arr = [];
function checkForm(){
	var album_name = document.getElementById('album_name');
	if(album_name.value==''){
		alert ('Please put album name');
		album_name.focus();
		return false;
	}			
}

function loadXMLDoc(a_id)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	    {
	    document.getElementById("songDiv").innerHTML=xmlhttp.responseText;
	    }
	  }
	xmlhttp.open("GET","ajax_song.php?a_id="+a_id,true);
	xmlhttp.send();
}

function ClearList(){
	document.getElementById('albDiv').innerHTML = '';
	arr = [];
}

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
			total =  total + arr[i].duration;
		}	
		innerText += '<tr><td  colspan="2"><b>Total: </b></td><td><b>' + total + '</b></td></tr></table>';
	}
	albDiv.innerHTML = innerText;
}

</script>
</head>
<body>

<div style="border: 0px; width:70%;height:50%;position:relative; padding:10px 20px;">
<? if($_POST[s_id]){
	echo '<div style="clear:both;border:0px; height:2% width:100%;">Album Created</div>';
}?>
<div style="border:0px;  width:100%;">
<div style="width:20%;float:left;position:relative; top: 10px; "><b>&nbsp;Artist</b></div>
<div style="width:30%;float:left;position:relative; top: 10px; left:10px;"><b>&nbsp;Songs</b></div> 
<div style="width:30%;float:left;position:relative; top: 10px; left:20px;"><b>&nbsp;Create Album - max <?=$total; ?> songs</b></div>
</div>
<div style="clear:both;border:1px; width:100%; height:10px; position:relative;"></div>
<form name="frm" id="frm" action="test2.php" method="POST">
<div style="width:20%; height:38%;border: 1px solid; float:left;position:relative;overflow:auto;" >
<?
mysql_data_seek($res,0);
while ($dat = mysql_fetch_assoc($res)){ 
	echo '<a href="#" onclick="loadXMLDoc('.$dat[id].'); return false">'.$dat[name].'</a><br/>';
}
?>
</div>
<div id="songDiv" style="width:30%; height:38%;border: 1px solid; float:left; position:relative; left:10px;overflow:auto;" >

<?
if (mysql_num_rows($res_song)){
	mysql_data_seek($res_song,0);
	while ($dat = mysql_fetch_assoc($res_song)){ 
		echo '<a href="#" onclick="AddRemove('.$dat[id].','."'$dat[name]',$dat[duration],'$dat[a_name]'".'); return false">'.$dat[name].'</a><br/>';
	}
}
?>
</div>
<div name="albDiv" id="albDiv" style="width:40%; height:45%;border:1px solid; float:left; position:relative;left:20px;overflow:auto;" >
</div>
<div style="clear:both;border:0px;  width:100%;">
<div style="width:30%;float:left;position:relative; top: 10px; ">Enter Album name&nbsp;<input type="text" name="album_name" id="album_name"	></div>
<div style="width:30%;float:left;position:relative; top: 10px; ">Select Genre: 
<select id="genre" class="genre" name="genre">
<?
while ($dat = mysql_fetch_assoc($res_genre)){
		echo "<option value=\"$dat[genre_id]\">$dat[name]</option>";
}
?>
</select>
</div>
<div style="width:30%;float:left;position:relative; top: 10px; ">
<input type="button" value="Clear List" onclick="ClearList();">&nbsp;<input type="submit" value="Submit" onclick="return checkForm();">
</div>
</div>
</form>
</div>
</body>
</html>