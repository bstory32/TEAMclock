var $projectItem = $('.projects-section');



$projectItem.find('[context="editDetails"]').on('click', function(){
	$(this).parent().parent().find('.edit-memo').slideToggle();

});