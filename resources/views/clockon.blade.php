<!DOCTYPE html>
<html>
<body>
    <!--<button onclick="ThePrompt()">Prompt Box</button>-->
    
	<span id="hellouser" style="color:blue;"></span>
	<script>
		
			var theuser = prompt("Please enter your name", "Nihsiang");
			if (theuser != null) {
				document.getElementById("hellouser").innerHTML =
				"Hello " + theuser + "! ：)";
			}
		
	</script>
</body>
</html>