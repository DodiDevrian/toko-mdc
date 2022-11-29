$(document).ready(function(){
	var table = $('#dataTables').DataTable({
		buttons:['copy', 'csv', 'excel', 'pdf', 'print']
	});

	table.buttons().container()
	.appendTo('#example_wraper col-md-6:eq(0)');
});