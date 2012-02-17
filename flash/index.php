<?php

/*
 * created by arcady.1254@gmail.com 17/2/2012
 */
?>
<html>
	<head>
		<title>Simple Flash Mp3 Player</title>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <script type="text/javascript" src="js/swfobject.js"></script>
	
		<script type="text/javascript">
		
			var stageW = 560;
			var stageH = 300; 
			var cacheBuster = Date.parse(new Date());
			
			var flashvars = {};
			var params = {};
			
			params.bgcolor = "#cccccc";
			params.allowfullscreen = "true";
			
			
			flashvars.stageW = stageW;
			flashvars.stageH = stageH;
			
			flashvars.pathToFiles = "/";
			
			flashvars.artistName = "Busta Rhymes";
			flashvars.songName = "Break Ya Neck";
			flashvars.songURL = "songs/song.mp3";
			
			flashvars.settingsPath = "xml/settings.xml";
			flashvars.xmlPath = "xml/mp3_player.xml";

			
			swfobject.embedSWF("preview.swf?t="+cacheBuster, "songs/song.mp3", stageW, stageH, "9.0.124", "js/expressInstall.swf", flashvars, params);
			
		</script>
			
	</head>


	<body bgcolor="#ffffff" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" scroll="yes">
	
		<table width="100%"  height="100%">
		  <tr>
			<td align="center">
			
				<div id="myContent">
					<p>
					<!--	<a href="http://www.adobe.com/go/getflashplayer">
							<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/>
						</a> -->
					</p>	
				</div>
			
			</td>
		  </tr>
		</table>
	
	</body>
</html>