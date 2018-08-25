
//Abrir menu mobile

$(document).ready(function() {
	$('.sidenav').sidenav()
});

M.Dropdown.init(document.querySelectorAll('dropdown-trigger'), {
	hover: true,
	constrainWidth: false,
	coverTrigger: false,
	outDuration: 400,
	inDuration: 400
});	

/*M.Tabs.init(document.querySelectorAll('.tabs'))*/

//Abrir o Calendário

$(document).ready(function(){
	$('.datepicker').datepicker();
});