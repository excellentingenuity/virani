// JavaScript Document

$(document).ready(function() {
 	if ((window.screen.width<800)||(window.innerWidth<800)) {
		//alert('Screen size: smaller than 800x600');
		document.getElementById("basecss").setAttribute('href', 'css/mobile.css');
		document.getElementById('top_nav').className=("nav nav-pills nav-stacked");	
		
	}
});