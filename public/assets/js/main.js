$(document).ready(function() {
	$('#btnEntrepriseId').click(function() {
		
		$('#form1').toggle();
	});
	$('#btnSalarieId').click(function() {
		$('#form2').toggle();
	});		

	$('#calendar').fullCalendar({
        // put your options and callbacks here
    })
});