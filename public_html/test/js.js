function checkForm(){
	var album_name = document.getElementById('album_name');
	//return SelectArr();
	if(album_name.value==''){
		alert ('Please put album name');
		album_name.focus();
		return true;
	}			
}

function SelectArr(){
	var s_id =  document.getElementsByName('s_id[]');
	var l = s_id.length;
	//alert(l);
	 var selectedRows = [];
	    for (var i = 0; i < l; i++) {
            selectedRows.push(s_id[i].value);
            //alert(s_id[i].value);
	    }

	  return (JSON.stringify(selectedRows));
	//return false;
	
}

function selectArtist(str,artist_id){
	document.getElementById('artist_input').value=str;
	document.getElementById('livesearch').innerHTML='';
	document.getElementById('livesearch').style.border="0px";
	document.getElementById('song_input').disabled=false;
	document.getElementById('exist').value=artist_id;
	document.getElementById("AddSongDiv").style.visibility='visible';
	document.getElementById("AddSongBDiv").style.visibility='visible'
}

function selectSong(str){
	document.getElementById('song_input').value=str;
	document.getElementById('livesearch2').innerHTML='';
	document.getElementById('livesearch2').style.border="0px";
	document.getElementById('add_song').disabled=true;
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
	xmlhttp.open("GET","ajax_song.php?artist_id="+a_id,true);
	xmlhttp.send();
}

function loadXMLAbum(a_id)
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
	    document.getElementById("albums_list").innerHTML=xmlhttp.responseText;
	    }
	  }
	xmlhttp.open("GET","ajax_album.php?album_id="+a_id,true);
	xmlhttp.send();
}

function loadXMLAbumDel(a_id)
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
		  	//ClearList();
	    	document.getElementById("albums").innerHTML=xmlhttp.responseText;	
	    }
	  }
	xmlhttp.open("GET","ajax_album.php?album_id="+a_id+"&del=yes",true);
	xmlhttp.send();
}

function AddSong()
{
	var a_id = document.getElementById("exist").value;
	var a_name = document.getElementById("artist_input").value;
	var s_name = document.getElementById("song_input").value;
	var duration = document.getElementById("duration").value;
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
		  document.getElementById("artist_input").value='';
		  document.getElementById("song_input").value='';
		  document.getElementById("duration").value='';
		  document.getElementById('add_song').disabled=true;
		  document.getElementById("AddSongDiv").style.visibility='hidden';
		 document.getElementById("AddSongBDiv").style.visibility='hidden';
	    }
	  }
	xmlhttp.open("GET","ajax_song_add.php?artist_id="+a_id+"&song=" + s_name+"&duration=" + duration,true);
	xmlhttp.send();
}


function ClearList(){
	document.getElementById('albDiv').innerHTML = '';
	arr = [];
}

function showResult(str)
{
	
if (str.length==0)
  {
	  document.getElementById("livesearch").innerHTML="";
	  document.getElementById("livesearch").style.border="0px";
  return;
  }
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
	    //alert(JSON.stringify(arr));
		var rsp = xmlhttp.responseText;
		//alert(rsp.indexOf('ZERO'));
		if(rsp.indexOf('ZERO')==0) 
			rsp='';
	    document.getElementById("livesearch").innerHTML=rsp;
	    if(rsp !='')
	    	document.getElementById("livesearch").style.border="1px solid #A5ACB2";
	    else{
	    	document.getElementById("livesearch").style.border="0px solid #A5ACB2";
	    	document.getElementById("add_artist").style.visibility='visible';
	    }
	}
 }
xmlhttp.open("GET","livesearch.php?artist="+str,true);
xmlhttp.send();
}

function showResult2(str)
{
if (str.length==0)
  {
	  document.getElementById("livesearch2").innerHTML="";
	  document.getElementById("livesearch2").style.border="0px";
	  document.getElementById('add_song').disabled=true;
	  return;
  }
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
	  var rsp = xmlhttp.responseText;
	  if(rsp.indexOf('ZERO')==0) 
		rsp='';
	  document.getElementById("livesearch2").innerHTML=rsp;
	  if(rsp !='')
    	document.getElementById("livesearch2").style.border="1px solid #A5ACB2";
    else{
    		document.getElementById("livesearch2").style.border="0px solid #A5ACB2";
    		//document.getElementById('add_song').disabled=false;
    		document.getElementById('duration').disabled=false;
    	}
    }
  }
xmlhttp.open("GET","livesearch.php?artist="+document.getElementById("artist_input").value + '&song=' +str,true);
xmlhttp.send();
}


function showResult3(str)
{
if (str.length>0)
  {
	document.getElementById('add_song').disabled=false;
	return;
  }
}

function AddAlbum()
{
	if (checkForm()){
		return false;
	}
			
	var xmlhttp;
	var an = document.getElementById("album_name").value;
	var genre = document.getElementById("genre").value;
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
		  document.getElementById("albums").innerHTML=xmlhttp.responseText;
	    }
	  }
	xmlhttp.open("GET","ajax_new.php?album_name="+an+"&genre=" + genre+"&s_id=" + SelectArr(),true);
	xmlhttp.send();
}

function AddArtist()
{
	var xmlhttp;
	var an = document.getElementById("artist_input").value;
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
		  document.getElementById("artist").innerHTML=xmlhttp.responseText;
		  document.getElementById("add_artist").style.visibility='hidden';
		  document.getElementById("artist_input").value='';
		  document.getElementById("artist_input").focus();
		  //document.getElementById("AddSongDiv").style.visibility='visible';
		  //document.getElementById("AddSongBDiv").style.visibility='visible';
	    }
	  }
	xmlhttp.open("GET","ajax_artist_add.php?artist_name="+an,true);
	xmlhttp.send();
}