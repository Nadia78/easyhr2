$(document).ready(function() {
	$('#btnEntrepriseId').click(function() {
		
		$('#form1').toggle('slow');
	});
	$('#btnSalarieId').click(function() {
		$('#form2').toggle('slow');
	});		

	$('#calendar').fullCalendar({
        // put your options and callbacks here
    })
});