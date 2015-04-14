
function wb_form_validateForm(formId, values, errors) {
	var form = $("input[name='wb_form_id'][value='" + formId + "']").parent();
	if (!form || form.length === 0 || !errors) return;
	
	form.find("input[name],textarea[name]").css({backgroundColor: ""});
	
	if (errors.required) {
		for (var i = 0; i < errors.required.length; i++) {
			var name = errors.required[i];
			var elem = form.find("input[name='" + name + "'],textarea[name='" + name + "'],select[name='" + name + "']");
			elem.css({backgroundColor: "#ff8c8c"});
		}
	}
	
	for (var k in values) {
		var elem = form.find("input[name='" + k + "'],textarea[name='" + k + "'],select[name='" + k + "']");
		elem.val(values[k]);
	}
}


function findActive(title){
	//alert (title);
	var ul = document.getElementById("hmenu");
	var items = ul.getElementsByTagName("li");
	for (var i = 0; i < items.length; ++i) {
		if(items[i].firstChild.innerHTML.replace(" ","-") == title) {
			//alert (items[i].firstChild.innerHTML);
			items[i].className="active";
			return;
		}
	}
	
		//alert(items[0].firstChild.innerHTML);
		items[0].className="active";

}


function openWin(link)
{
	//alert(link);
window.open(link,"1","location=no,toolbar=no, scrollbars=yes, resizable=no, top=100, left=300, width=1000, height=800");
//return false;

}
var current = 203; 
var cur_idea = 12;
var hideFlag=true;
var seriouse = false;
var foolcounter =0;
$(document).ready(function(){
  $('#th' + current).css('border',"2px red solid");
  $("#but1").hide();
/////////////////////////////////////////////////////////
  $("#but2").click(function(){  
		if(current > 207 )
			return false;
		$("#but1").show();
		base_name = "#wb_element_instance";
		$('#th' + current).css('border',"1px orange solid");
		$(base_name + current).fadeToggle(1500);
		current++;
		$(base_name + current).fadeToggle(1500);
		$('#th' + current).css('border',"2px red solid");
		if(current > 207 )
			 $("#but2").hide();
		return false;
  });
 /////////////////////////////////////////////////////////
  $("#but1").click(function(){
		if(current < 204 )
			return false;
		$("#but2").show();
		base_name = "#wb_element_instance";
		$('#th' + current).css('border',"1px orange solid");
		$(base_name + current).fadeToggle(1500);
		current--;
		$(base_name + current).fadeToggle(1500);
		
		$('#th' + current).css('border',"2px red solid");
		
		if(current < 204 )
			 $("#but1").hide();
		return false;
  });
 /////////////////////////////////////////////////////////  
  $(".thumbnail").click(function(){
  		//alert(this.id);
		var now = this.id.substr(2);
		//alert(id);
		$("#but2").show();
		$("#but1").show();
		base_name = "#wb_element_instance";
		$(base_name + current).fadeToggle(1500);
		$(base_name + now).fadeToggle(1500);
		$('#th' + current).css('border',"1px orange solid");
		current = now;
		$(this).css('border',"2px red solid");
		if(current < 204 )
		 	$("#but1").hide();
		else if(current > 207 )
			 $("#but2").hide();
		return  false;
  
  });
  /////////////////////////////////////////////////////////
  $("#wb_element_instance6").mouseover(function(){
	 // alert($(this).css('left'));
	 if(!hideFlag)
	 	return false;
	 if(parseInt($(this).css('left'))==409) {
	  	$(this).css('left','209px');
	 }
	 // alert($(this).css('left'));
	  else 
	  	  $(this).css('left','409px');
	  $("#p1").css('color','red').css('font-size','22px').html("Yes, out the box.<br/><br/>Can you stop the crazy button?");
	  
	  if(foolcounter>6)
	  	$("#p1").css('color','red').css('font-size','22px').html("Tired chasing?<br/><br/>Hint: search on th page");
	  
	  foolcounter++;
	});
  //.animate({width:'toggle' },1000);
  
    $("#wb_element_instance6").click(function(){
	  if(hideFlag)
	  	return false;
	  if(!seriouse){
	  	$("#p1").css('color','green').css('font-size','22px').html("<br/><br/>That's enough<br/><br/>");
		seriouse = true;
	  }else{
		  $("#p1").css('color','green').css('font-size','22px').html("<br/><br/>Come on, be seriouse!<br/><br/>");
		  $("#wb_element_instance6 a").css('cursor','default');
		  $("#wb_element_instance6 a").css('background-color','grey');
		  $("#wb_element_instance6 span").text('Nowhere');
		  //$("#wb_element_instance6").hide();
		  /*$("#wb_element_instance6").bind("mouseover",function(){
			  //alert("The paragraph was clicked.");
			  //$("#wb_element_instance6 a").css('cursor','default');
			  
		  });*/
		  
	  }
	  hideFlag=false;
	  return false;
  });
  
   $("#wb_element_instance7").click(function(){
	   if(!hideFlag)
	  	return false;
	  $("#p1").css('color','red').css('font-size','22px').html("You killed it...<br/><br/>We need another solution");
	  $("#wb_element_instance6").hide();
  });
  
  $("#wb_element_instance9").click(function(){
	  if(!hideFlag)
	  	return false;
	  $("#p1").css('color','green').css('font-size','22px').html("Well done!<br/><br/>");
	  $("#wb_element_instance6").css('left','409px');
	  $("#wb_element_instance6").show();
	  hideFlag=false;
  });
  
    $("#wb_element_instance11").click(function(){
	    //alert(cur_idea);
	 	$("#wb_element_instance" + cur_idea).toggle();
		cur_idea++;
		if(cur_idea>14) cur_idea=12;
		$("#wb_element_instance" + cur_idea).toggle();
		return false;
	});
		
	$("#flag1").mouseover(function(){
	    //alert(cur_idea);
	 	$("#flag2").show();
		$("#flag2").css('cursor','pointer');
		$("#flag3").show();
		$("#flag3").css('cursor','pointer');
		return false;
	});
	
	$("#wb_main").mouseover(function(){
	    //alert(cur_idea);
	 	$("#flag2").hide();
		$("#flag3").hide();
		return false;
	});
	
	$("#flag2").click(function(){
	    //alert(cur_idea);
	 	//window.location.href=window.location.href +"/ru";	
		//parser.href = "http://example.com:3000/pathname/?search=test#hash";
		var parser = document.createElement('a');
		parser.href = window.location.href;
		// alert(parser.pathname);
		/*parser.protocol; // => "http:"
		parser.hostname; // => "example.com"
		parser.port; // => "3000"
		parser.pathname; // => "/pathname/"
		parser.search; // => "?search=test"
		parser.hash; // => "#hash"
		parser.host; // => "example.com:3000"*/
		//window.location.href = 
		//alert("http://" + parser.hostname +"/ru" + parser.pathname);
		window.location.href = "http://" + parser.hostname +"/ru" + parser.pathname;	
	});
	
	$("#flag3").click(function(){
	    //alert(cur_idea);
	 	//window.location.href=window.location.href +"/ru";	
		//parser.href = "http://example.com:3000/pathname/?search=test#hash";
		var parser = document.createElement('a');
		parser.href = window.location.href;
		// alert(parser.pathname);
		/*parser.protocol; // => "http:"
		parser.hostname; // => "example.com"
		parser.port; // => "3000"
		parser.pathname; // => "/pathname/"
		parser.search; // => "?search=test"
		parser.hash; // => "#hash"
		parser.host; // => "example.com:3000"*/
		//window.location.href = 
		window.location.href = "http://" + parser.hostname +"/heb" + parser.pathname;	
	});
});