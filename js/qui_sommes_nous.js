$(document).ready(function(){
	function hover() {
		$(".member").hover(function(){
			$(this).next().toggleClass('active');
		});
	};
	hover();
});