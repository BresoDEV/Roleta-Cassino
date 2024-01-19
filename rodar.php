<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
	* {
		margin: 0;
		padding: 0;

	}

	html {
		background-color: darkgreen;
		font-size: x-large;
	}

	.span {
		font-size: 300%;
		color: brown;
		background-color: antiquewhite;
		border: 1px solid black;
		min-width: 100px;
		max-width: 100px;
		min-height: 100px;
		max-height: 100px;
	}
</style>

<body>
	<center>

		<div class="span" id="1"></div>


	</center>
</body>

<script>
	addTouthMove('1')
	
	function addTouthMove(elementID) {
		var id = 0;
		if (document.getElementById(elementID))
			id = document.getElementById(elementID);
		else
			id = elementID;
		id.addEventListener('touchmove', (x) => {
			id.style.position = 'fixed';
			id.style.left = (x.touches[0].clientX - (id.offsetWidth / 2)) + 'px';
			id.style.top = (x.touches[0].clientY - (id.offsetHeight / 2)) + 'px';
		});
	}






</script>








</html>