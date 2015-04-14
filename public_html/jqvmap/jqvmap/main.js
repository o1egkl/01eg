	jQuery(document).ready(function() {
	var myarr1 = ["au","fr","cy","pt","in","pl","il","tr","gb","es","sg","se","tw","cn","it"];
	function myrow(code,country,company,tel,email,site,address)
{
	this.code=code;
	this.country=country;
	this.company=company;
	this.tel=tel;
	this.email=email;
	this.site=site;
	this.address=address;
}
	var myarr= new Object();
	myarr["au"]= new myrow("au","Australia","iAutomation Pty Limited","+ 61 3 9572 0144", "craigk@iautomation.com.au", 	"www.iautomation.com.au", 	"1240 Glenhuntly Rd, Carnegie, Victoria, 3163");
	myarr["fr"]= new myrow("fr","France","EVOLIA","+33240598715","vobmann.evolia@gmail.com","","5 bis rue de la Rigotière, 44700 ORVAULT");
	myarr["cy"]= new myrow("cy","Cyprus","NAISUS CO LTD","+35725394844","savva.s@naisus-aut.com","http://www.naisus-aut.com/2k9/index.php","3318 Limassol, P.O. BOX 53862");
	myarr["pt"]= new myrow("pt","Portugal","JUNG ELECTRO IBÉRICA, S.A.","+34 93 844 58 38","administracion@jungiberica.es","http://www.jungiberica.es/","C-155 de Sabadell a Granollers, km. 14,2, Apartado de correos 8, 08185 llica de vall, Barcelona");
	myarr["in"]= new myrow("in","India","Venba Tech Private Ltd","+91 44  28470898","banu@venbatech.com","http://venbatech.com/","No.10, 2nd Street, Dr. R.K.Salai, Mylapore, Chennai - 500 004. ");
	myarr["pl"]= new myrow("pl","Poland","inComfort Piotr Buzon","+48 696 137 345","biuro@incomfort.pl","www.incomfort.pl","42-300 Myszków,  V");
	myarr["il"]= new myrow("il","Israel","S. Kahane & Sons Ltd.","+972-9-8633000","ibus@kahane.co.il","http://www.kahane.co.il/","האומנות 9, בניין B2 קומה 2, פארק פולג, ת.ד 6262' נתניה 42160");
	myarr["tr"]= new myrow("tr","Turkey","SIEMENS SAN. ve TIC. A.S. Build. Tech.(BT)/Integr. BS(IBS)","+90 216 459 2901","canmurat.gul@siemens.com","www.siemens.com.tr/gamma","Yakacik Caddesi  No:111, 34870 Kartal Istanbul ");
	myarr["gb"]= new myrow("gb","UK","Schneider Electric/ATL - Andromeda Telematics Limited","+44 (0)1932 341200","gb-lss-sales@schneider-electric.com"," www.schneider-electric.com  ","Tec 6, Byfleet, Technical Center, Canada Road, Byfleet, Surrey KT14 7JX");
	myarr["es"]= new myrow("es","Spain","JUNG ELECTRO IBÉRICA, S.A.","+34 93 844 58 38","administracion@jungiberica.es","http://www.jungiberica.es/","C-155 de Sabadell a Granollers, km. 14,2, Apartado de correos 8, 08185 llica de vall, Barcelona");
	myarr["sg"]= new myrow("sg","Singapore","JUNG ASIA PTE LTD","+65 6286 8816","KeithLeong@sg.jungasia.com","http://www.jungasia.com/index.html","No. 1 Harrison Road, #05-01 ITE Electric Building, Singapor 369652");
	myarr["se"]= new myrow("se","Sweden","Exitor AB","+46 734455250","mikael.drakell@exitor.se","","Hallandsvägen 9, 24538 Staffanstorp");
	myarr["tw"]= new myrow("tw","Taiwan","SETCA","+886-2-2832-2656","samuelyang@secta-taiwan.com","http://www.secta-taiwan.com/","Ln. 67, Zhoumei St., Beitou Dist., Taipei City 11277");
	myarr["cn"]= new myrow("cn","China","Beijing Nova Vision Technology Co. LTD","+8613121400586","zimra007@yahoo.com.cn","","Rm.901,JIAHUA Tower D, No.9 3rd St., Shangdi, Haidian District, Beijing");
	myarr["it"]= new myrow("it","Italy","e-domus","+39 0577 043509","riccardo.bandini@e-domus.biz","http://www.e-domus.biz/","Via delle Volte, 9, 53034 Colle di val d’Elsa (SI) -" );
	myarr["it"]= new myrow("it","Italy","AURATEC di Simone Cartisano","+390287158121","amministrazione@auratec.it","http://www.auratec.it/","Milano –  Via Lucera, 35 – c.a.p. 20152 - Milano");
	//alert(myarr[0].code);
	jQuery('#vmap').vectorMap(
{
			map: 'world_en',
			backgroundColor: '#ffffff',
			borderColor: '#816161',
			borderOpacity: 0.25,
			borderWidth: 1,
			color: '#ADADAD',
			enableZoom: true,
			hoverColor: '#1499EA',
			hoverOpacity: null,
			normalizeFunction: 'linear',
			scaleColors: ['#ADADAD', '#6D6D6D'],
			selectedColor: '#1499EA',
			selectedRegion: null,
			showTooltip: true ,
			regionsSelectableOne:true,
			onRegionClick: function(element, code, region)
			{
				var message = 'You clicked "'
					+ region
					+ '" which has the code: '
					+ code.toUpperCase();
					 
				//alert(message);
				//jQuery('#table1').html('<table style="width:95%;" border="1" align="center" id="table1"></table>');
				if(jQuery.inArray(code, myarr1) >-1){
					jQuery('#tdcountry').text(myarr[code].country);
					jQuery('#tdcountry').css('color','#1499ea').css('font-size','16px').css('font-weight','500').css("text-align", "center");
					jQuery('#tdcompany').text(myarr[code].company);
					jQuery('#tdcompany').css('color','#1499ea').css('font-size','16px').css('font-weight','500').css("text-align", "center");
					jQuery('#tdtel').text(myarr[code].tel);
					jQuery('#tdtel').css('color','#1499ea').css('font-size','16px').css('font-weight','500').css("text-align", "center");
					jQuery('#tdemail').text(myarr[code].site);
					jQuery('#tdemail').css('color','#c6013c').css('font-size','16px').css('font-weight','500').css("text-align", "center");
					jQuery('#tdsite').text(myarr[code].email);
					jQuery('#tdsite').css('color','#c6013c').css('font-size','16px').css('font-weight','500').css("text-align", "center");
					jQuery('#tdaddress').text(myarr[code].address);
					jQuery('#tdaddress').css('color','rgb(68,73,84)');
					jQuery('#tdaddress').css("text-align", "center").css('font-size','17px').css('font-weight','600');  
					if(code=="gb" || code=="tr")
						jQuery('#tdaddress').css("padding", "0px")
				}else{
					jQuery("#table1").find("td").text(" ");
				}
			}   
			
			
	});
		
		for (var key in myarr) {
			eval("jQuery('#vmap').vectorMap('set', 'colors', {" + key +" : '#6D6D6D'})");
			jQuery("#jqvmap1_" + key).hover(function() {
				jQuery(this).css('cursor','pointer');
			}, function() {
				$(this).css('cursor','auto');
			});
		}
		/*
		jQuery('#vmap').vectorMap('set', 'colors', {'fr': '#6D6D6D'});    
		jQuery('#vmap').vectorMap('set', 'colors', {cy: '#6D6D6D'});  
		jQuery('#vmap').vectorMap('set', 'colors', {pl: '#6D6D6D'});  
		jQuery('#vmap').vectorMap('set', 'colors', {in: '#6D6D6D'});  
		
				jQuery('#vmap').vectorMap('set', 'colors', {au: '#6D6D6D'});  
		jQuery('#vmap').vectorMap('set', 'colors', {pt: '#6D6D6D'});  
		jQuery('#vmap').vectorMap('set', 'colors', {il: '#6D6D6D'});  
		jQuery('#vmap').vectorMap('set', 'colors', {tr: '#6D6D6D'});  
		jQuery('#vmap').vectorMap('set', 'colors', {gb: '#6D6D6D'});
		jQuery('#vmap').vectorMap('set', 'colors', {es	: '#6D6D6D'});  
		jQuery('#vmap').vectorMap('set', 'colors', {sg: '#6D6D6D'});  
		jQuery('#vmap').vectorMap('set', 'colors', {se: '#6D6D6D'});  
		jQuery('#vmap').vectorMap('set', 'colors', {tw: '#6D6D6D'});  
		jQuery('#vmap').vectorMap('set', 'colors', {'cn': '#6D6D6D'}); 
		jQuery('#vmap').vectorMap('set', 'colors', {it: '#6D6D6D'});   */
	});
