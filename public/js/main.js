jQuery(function($) {
	$("main").mCustomScrollbar();
	$(".projects-list").mCustomScrollbar();
	$(".angebotserstellung .table").mCustomScrollbar();

	$('#accordion2 [data-toggle="collapse"]').click(function(e) {
		var $this = $(this);
		$('#accordion2 .panel-default').removeClass('active');
		if($this.hasClass('collapsed')) $this.parent().parent().addClass('active');
	})
})