<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Playfair+Display" />
		<style>
			body{
				margin: 0pt;
			}
			div#fullscreen{
				background-color: #e6e6e6;
				width:100%; 
				height:100%; 
				margin: 0pt;
			}
			div#header{
				background-color: #1E90FF;
				width:100%;
				height:75px;
				margin: 0pt;
				padding: 0pt;
				float: left;
				text-align:left;
			}
			div.sidebar#small{
				background-color: #1E90FF;
				width:60px;
				height: calc(100% - 75px);
				margin: 0pt;
				padding: 0pt;
				float: left;
				text-align:center;
			}
			div.sidebar#expansion{
				background-color: #00BFFF;
				width:200px;
				height: calc(100% - 75px);
				margin: 0pt;
				padding: 0pt;
				float: left;
				text-align:left;
			}
			#logoTitle{
			font-family: "Playfair Display";
			font-size: 27px;
			color: white;
			}
			.logo{
				cursor: pointer;
			}
			.icon{
				float:center;
			}
			.iconText{
				font-size: 24px;
				color: white;
				margin-top: 6px;
				margin-left: 20px;
				margin-bottom: 29px;
			}
			
		</style>
	</head>
	<body>
		<div id="fullscreen">
			<div id="header">
				<img id="logo" class="logo" src="icons/logo.png" width="70px" style="margin:5px; float:left;" onclick="window.open('home.php', '_self');"></img>
				<h2 id="logoTitle" class="logo" style="float:left;" onclick="window.open('home.php', '_self');">CalendarChat</h2>
			</div>
			<div class="sidebar" id="small">
				<img id="shrinkButton" src="icons/shrink.png" width="50px" style="margin-top:15px; margin-bottom:5px; cursor: pointer;"onclick="expansion()" ></img>
				<img id="expandButton" src="icons/expand.png" width="50px" style="margin-top:15px; margin-bottom:5px; cursor: pointer; "onclick="expansion()"></img>
				
	<!--			<img class="icon" src="icons/.png" width="50px"	style="margin-top:15px; margin-bottom:5px; cursor: pointer;" onclick="window.open('.php','_self');"></img>									-->
				<img class="icon" src="icons/agenda.png" width="50px" style="margin-top:15px; margin-bottom:5px; cursor: pointer;" onclick="window.open('agenda.php','_self');"></img>									
				<img class="icon" src="icons/chat.png" width="50px" style="margin-top:5px; margin-bottom:5px; cursor: pointer;" onclick="window.open('chat.php','_self');"></img>									
			</div>
			<div class="sidebar" id="expansion">
				<img src="icons/corner.png" width="21px" style="float:left;"></img>	
				<h3 class="iconText" style="float:left; margin-left:0px; margin-top: 10px;">Invouwen</h3>
				<h3 class="iconText">Agenda</h3>
				<h3 class="iconText">Chats</h3>
			</div>
			<div class="rounding" id="rounding">
				<img src="icons/corner.png" width="20px" style="float: left;"></img>	
			</div>
			
		</div>
		
		<script>
		var sidebarExpanded = false;
			document.getElementById("shrinkButton").style.display = "none";
			document.getElementById("expandButton").style.display = "inline";
			document.getElementById("expansion").style.display = "none";

		
		function expansion(){
			if(sidebarExpanded == true){
				document.getElementById("shrinkButton").style.display = "none";
				document.getElementById("expandButton").style.display = "inline";
				document.getElementById("expansion").style.display = "none";
				sidebarExpanded = false;
				document.getElementById("rounding").style.display = "block";
			} else {
				document.getElementById("shrinkButton").style.display = "inline";
				document.getElementById("expandButton").style.display = "none";
				document.getElementById("expansion").style.display = "block";
				sidebarExpanded = true;
				document.getElementById("rounding").style.display = "none";
			}
		}
		</script>
	</body>
<html>	