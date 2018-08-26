
//Abrir menu mobile

$(document).ready(function() {
	$('.sidenav').sidenav()
});


/*M.Tabs.init(document.querySelectorAll('.tabs'))*/

//Abrir o Calendário

$(document).ready(function(){
	$('.datepicker').datepicker();
});

//Ativando tabs
M.Tabs.init(document.querySelectorAll('.tabs'))

//Ativando contador da text area
$(document).ready(function() {
	$('input#input_text, textarea#textarea2').characterCounter();
});