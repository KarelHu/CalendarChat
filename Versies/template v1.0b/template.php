<html>
	<head>
		<title></title>
		<style>
			body{
				margin: 0pt;
			}
			div#fullscreen{
				background-color:green;
				width:100%; 
				height:100%; 
				margin: 0pt;
			}
			div#header{
				background-color:red;
				width:100%;
				height:50px;
				margin: 0pt;
				padding: 0pt;
				float: left;
				text-align:center;
			}
			div.sidebar#small{
				background-color:blue;
				width:50px;
				height: calc(100% - 50px);
				margin: 0pt;
				padding: 0pt;
				float: left;
				text-align:center;
			}
			div.sidebar#expansion{
				background-color:darkblue;
				width:200px;
				height: calc(100% - 50px);
				margin: 0pt;
				padding: 0pt;
				float: left;
				text-align:center;
			}
		</style>
	</head>
	<body>
		<div id="fullscreen">
			<div id="header">
				<p>fsHEADER</p>
			</div>
			<div class="sidebar" id="small">
				<img id="shrinkButton" src="icons/shrink.png"  width="45px" style="margin-top:15px; margin-bottom:5px; cursor: pointer;"onclick="expansion()" ></img>
				<img id="expandButton" src="icons/expand.png"  width="45px" style="margin-top:15px; margin-bottom:5px; cursor: pointer;"onclick="expansion()"></img>
			</div>
			<div class="sidebar" id="expansion">
				
			</div>
			
		</div>
		
		<script>
		var sidebarExpanded = true;
			document.getElementById("shrinkButton").style.display = "inline";
			document.getElementById("expandButton").style.display = "none";
			document.getElementById("expansion").style.display = "block";

		
		function expansion(){
			if(sidebarExpanded == true){
				document.getElementById("shrinkButton").style.display = "none";
				document.getElementById("expandButton").style.display = "inline";
				document.getElementById("expansion").style.display = "none";
				sidebarExpanded = false;
			} else {
				document.getElementById("shrinkButton").style.display = "inline";
				document.getElementById("expandButton").style.display = "none";
				document.getElementById("expansion").style.display = "block";
				sidebarExpanded = true;
			}
		}
		</script>
	</body>
<html>	