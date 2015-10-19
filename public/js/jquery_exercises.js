(function() {
	"use strict";
	
	// $(document).ready(function() {
	// 	alert('The DOM has finished loading!');
	// });

	$(document).ready(function() {
		$('h1').click(function(event){
			$(this).css('background-color','pink');
			alert('h1 was clicked');
		});

		$('p').dblclick(function(event){
			$(this).css('font-size','18px');
			alert('p was clicked');
		});
		$('li').hover(
			function(event){
				$(this).css('color','red'); 
			}, 
			function(event) {
				$(this).css('color','black');
			}
		);
	});	

})();