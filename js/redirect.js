setInterval(function() {
	var div = document.querySelector("#counter");
	var count = div.textContent * 1 - 1;
	div.textContent = count;
	if (count <= 0) {
		window.location.replace("index.php");
	}
}, 1000);

