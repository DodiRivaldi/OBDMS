
//datepicker
$(document).ready(function(){
	$('.datepicker').datepicker({
		format: 'dd-mm-yyyy',
	    autoclose: true,
	});

	$('.datatable').dataTable();

	$('.drp_search_bg').change(function() {
		var url = $(this).attr('data-url');
		var val = $(this).val();
		window.location.href = url+'/'+val;
	});


});