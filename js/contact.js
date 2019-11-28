$(document).ready(function(){
	window.onload=auto_refresh()

	function auto_refresh() {
		p=setInterval(refresh, 1);
	}

	function refresh() {
		if ($('#com').prop("checked") == true && $('#gestion').prop("checked") == true) {
			$('input[name="vente"]').removeAttr('disabled');
		}

		else {
			$('input[name="vente"]').attr('disabled', 'disabled');
			$('input[name="vente"]').prop('checked', false);
		}
	}
});