<!DOCTYPE html>
<html>
<body>
    <!--<button onclick="ThePrompt()">Prompt Box</button>-->
    
	<span id="test" style="color:blue;"></span>
	<script>
		
			var theuser = prompt("Please enter your key", "Nihsiang");
			if (theuser != null) {
				document.getElementById("test").innerHTML =
				"Hello " + theuser + "! ：)";
			}
		
	</script>
</body>
</html>