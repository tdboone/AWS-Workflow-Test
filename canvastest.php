<canvas id="my_canvas" width="150" height="150">
	This browser does not support the canvas element.
</canvas>

<script type="text/javascript">
	var canvas = document.getElementById('my_canvas');
	if (canvas.getContext){
		var context = canvas.getContext('2d');
	}else{
		//Do nothing???
	}
	
	if (context){
		context.fillStyle = "rgb(200, 0, 0)";
		context.fillRect (10, 10, 100, 100);
		context.fillStyle = "rgb(0, 200, 0)";
		context.fillRect (20, 20, 100, 100);
		context.fillStyle = "rgb(0, 0, 200)";
		context.fillRect (30, 30, 100, 100);
	}
</script>

<a href="index.php"><h3>Return to index</h3></a>