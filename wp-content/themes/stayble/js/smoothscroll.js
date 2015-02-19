jQuery(document).ready(function($){

	$(window).scroll(function(){
		if($(this).scrollTop()){
			$('#smoothup').fadeIn();
		}
		else{
			$('#smoothup').fadeOut();
		}
	});
});