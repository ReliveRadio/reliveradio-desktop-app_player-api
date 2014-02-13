<?php
//APP == true?
if ($_GET['app'] == 'true') {
?>
<html>
<head>  
 <meta charset="utf-8" />
  <title>RR-PlayerApp</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="build/mediaelement-and-player.js"></script>
    <link rel="stylesheet" href="css/app.css" media="screen">
    
    <link rel="stylesheet" type="text/css" href="css/component.css" />
<?php
#Streams
//???-NIX
if ($_GET['stream'] == '') { 
	
	$mp3 = '24mobile.mp3';
	$streamtitle = 'Mix';
	$read = 'mix';
	
	//Ajax Callback
	echo '<script src="ajax/ajax-js.php?s=mix"></script>';
	
	//CSS
	echo "<style>
.cbp-qtprogress {
	background: #86BA00;
	position: absolute;
	height: 5px;
	width: 0%;
	bottom: 0;
	z-index: 1000;
}
div.mejs-button.mejs-playpause-button.icon-mejs-play:hover { 
	background: rgba(134, 186, 0, 0.92);
	text-align: center;
	font-size: 50px;
	height: 82px;
	padding: 30px;
	margin-top: -137px;
	z-index: 2000;
	position: relative;
	color:#fff;
    -moz-transition:width 5s, height 5s, background-color 5s, -moz-transform 5s;
    -webkit-transition:width 5s, height 5s, background-color 5s, -webkit-transform 5s;
    -o-transition:width 5s, height 5s, background-color 5s, -o-transform 5s;
    transition:width 5s, height 5s, background-color 5s, transform 5s;
}
div.mejs-button.mejs-playpause-button.icon-mejs-pause:hover { 
	background: rgba(134, 186, 0, 0.92);
	text-align: center;
	font-size: 50px;
	z-index: 2000;
	position: relative;
	color:#fff;
	height: 82px;
	padding: 30px;
	margin-top: -137px;
    -moz-transition:width 5s, height 5s, background-color 5s, -moz-transform 5s;
    -webkit-transition:width 5s, height 5s, background-color 5s, -webkit-transform 5s;
    -o-transition:width 5s, height 5s, background-color 5s, -o-transform 5s;
    transition:width 5s, height 5s, background-color 5s, transform 5s;
}
.audio-player h1#coloring { border-top:2px solid #86BA00 !important; }
</style>";
}


//Mix
if ($_GET['stream'] == 'mix') { 
	
	$mp3 = '24.mp3';
	$streamtitle = 'Mix';
	$read = 'mix';
	echo '<script src="ajax/ajax-js.php?s=mix"></script>';
	echo "<style>
.cbp-qtprogress {
	background: #86BA00;
	position: absolute;
	height: 5px;
	width: 0%;
	bottom: 0;
	z-index: 1000;
}
div.mejs-button.mejs-playpause-button.icon-mejs-play:hover { 
	background: rgba(134, 186, 0, 0.92);
	text-align: center;
	font-size: 50px;
	height: 82px;
	padding: 30px;
	margin-top: -137px;
	z-index: 2000;
	position: relative;
	color:#fff;
    -moz-transition:width 5s, height 5s, background-color 5s, -moz-transform 5s;
    -webkit-transition:width 5s, height 5s, background-color 5s, -webkit-transform 5s;
    -o-transition:width 5s, height 5s, background-color 5s, -o-transform 5s;
    transition:width 5s, height 5s, background-color 5s, transform 5s;
}
div.mejs-button.mejs-playpause-button.icon-mejs-pause:hover { 
	background: rgba(134, 186, 0, 0.92);
	text-align: center;
	font-size: 50px;
	z-index: 2000;
	position: relative;
	color:#fff;
	height: 82px;
	padding: 30px;
	margin-top: -137px;
    -moz-transition:width 5s, height 5s, background-color 5s, -moz-transform 5s;
    -webkit-transition:width 5s, height 5s, background-color 5s, -webkit-transform 5s;
    -o-transition:width 5s, height 5s, background-color 5s, -o-transform 5s;
    transition:width 5s, height 5s, background-color 5s, transform 5s;
}
.audio-player h1#coloring { border-top:2px solid #86BA00 !important; }
</style>";
}

//Technik
if ($_GET['stream'] == 'technik') { 
	
	$mp3 = 'technik.mp3';
	$streamtitle = 'Technik';
	$read = 'technik';
	echo '<script src="ajax/ajax-js.php?s=technik"></script>';
	echo "<style>
.cbp-qtprogress {
	background: #49AEC0;
	position: absolute;
	height: 5px;
	width: 0%;
	bottom: 0;
	z-index: 1000;
}
div.mejs-button.mejs-playpause-button.icon-mejs-play:hover { 
	background: rgba(73, 174, 192, 0.92);
	text-align: center;
	font-size: 50px;
	height: 82px;
	padding: 30px;
	margin-top: -137px;
	z-index: 2000;
	position: relative;
	color:#fff;
    -moz-transition:width 5s, height 5s, background-color 5s, -moz-transform 5s;
    -webkit-transition:width 5s, height 5s, background-color 5s, -webkit-transform 5s;
    -o-transition:width 5s, height 5s, background-color 5s, -o-transform 5s;
    transition:width 5s, height 5s, background-color 5s, transform 5s;
}
div.mejs-button.mejs-playpause-button.icon-mejs-pause:hover { 
	background: rgba(73, 174, 192, 0.92);
	text-align: center;
	font-size: 50px;
	z-index: 2000;
	position: relative;
	color:#fff;
	height: 82px;
	padding: 30px;
	margin-top: -137px;
    -moz-transition:width 5s, height 5s, background-color 5s, -moz-transform 5s;
    -webkit-transition:width 5s, height 5s, background-color 5s, -webkit-transform 5s;
    -o-transition:width 5s, height 5s, background-color 5s, -o-transform 5s;
    transition:width 5s, height 5s, background-color 5s, transform 5s;
}
.audio-player h1#coloring { border-top:2px solid #49AEC0 !important; }
</style>";

}

//Kultur
if ($_GET['stream'] == 'kultur') { 
	
	$mp3 = 'kultur.mp3';
	$streamtitle = 'Kultur';
	$read = 'kultur';
	echo '<script src="ajax/ajax-js.php?s=kultur"></script>';
	echo "<style>
.cbp-qtprogress {
	background: #FE5A27;
	position: absolute;
	height: 5px;
	width: 0%;
	bottom: 0;
	z-index: 1000;
}
div.mejs-button.mejs-playpause-button.icon-mejs-play:hover { 
	background: rgba(254, 90, 39, 0.92);
	text-align: center;
	font-size: 50px;
	height: 82px;
	padding: 30px;
	margin-top: -137px;
	z-index: 2000;
	position: relative;
	color:#fff;
    -moz-transition:width 5s, height 5s, background-color 5s, -moz-transform 5s;
    -webkit-transition:width 5s, height 5s, background-color 5s, -webkit-transform 5s;
    -o-transition:width 5s, height 5s, background-color 5s, -o-transform 5s;
    transition:width 5s, height 5s, background-color 5s, transform 5s;
}
div.mejs-button.mejs-playpause-button.icon-mejs-pause:hover { 
	background: rgba(254, 90, 39, 0.92);
	text-align: center;
	font-size: 50px;
	z-index: 2000;
	position: relative;
	color:#fff;
	height: 82px;
	padding: 30px;
	margin-top: -137px;
    -moz-transition:width 5s, height 5s, background-color 5s, -moz-transform 5s;
    -webkit-transition:width 5s, height 5s, background-color 5s, -webkit-transform 5s;
    -o-transition:width 5s, height 5s, background-color 5s, -o-transform 5s;
    transition:width 5s, height 5s, background-color 5s, transform 5s;
}
.audio-player h1#coloring { border-top:2px solid #FE5A27 !important; }
</style>";
}
?>
</head>
<body style="margin:0;">
<div style="border-top:1px solid #eee;"></div>

<div style="width: 326px;height: 32px; margin-bottom: 12px; font-family: Roboto Slab,serif;">
<?php
########################################### Tab mix ###########################################
#
#
if ($_GET['stream'] == 'mix') {								
?>
<style>
a.mix span.mix{ text-decoration: none !important; color: #fff !important;}
#active, #active:hover {
	color: #777 !important;
	background: #86BA00;
	text-decoration: none !important;
}
</style>
<a class="mix" href="?app=true&stream=mix&autoplay=true">
<div id="active" style="width:107px; float: left; border-left: 1px solid #EFEFEF;">
	<center>
		<div style="margin-top: 12px; cursor: pointer; margin-bottom: 12px;"> 
			<span class="mix icon-mejs-play"></span> <span class="mix">Mix</span>
		</div>
	</center>
</div>
</a>
<?php
}else {
?>
<style>
.icon-mix{
	color: #86BA00 !important;
	text-decoration: none !important;
}
a.mix { text-decoration: none !important; color: #000 !important;}
.icon-mix-color {
	-moz-transition:width 0.8s, height 0.8s, background-color 0.8s, -moz-transform 0.8s;
    -webkit-transition:width 0.8s, height 0.8s, background-color 0.8s, -webkit-transform 0.8s;
    -o-transition:width 0.8s, height 0.8s, background-color 0.8s, -o-transform 0.8s;
    transition:width 0.8s, height 0.8s, background-color 0.8s, transform 0.8s;
}
.icon-mix-color:hover {
	color: #FFF !important;
	background: #86BA00;
	-moz-transition:width 0.8s, height 0.8s, background-color 0.8s, -moz-transform 0.8s;
    -webkit-transition:width 0.8s, height 0.8s, background-color 0.8s, -webkit-transform 0.8s;
    -o-transition:width 0.8s, height 0.8s, background-color 0.8s, -o-transform 0.8s;
    transition:width 0.8s, height 0.8s, background-color 0.8s, transform 0.8s;
}
.icon-mix-color div:hover, 
.icon-mix-color div span.icon-mix:hover,
.icon-mix-color div span.icon-mix a:hover,
.icon-mix-color:hover .icon-mix,
.icon-mix-color .icon-mix:hover{
	color: #FFF !important;
	text-decoration: none !important;
}
a.mix:hover { text-decoration: none !important; color: #FFF !important;}
</style>
<a class="mix" href="?app=true&stream=mix&autoplay=true">
<div id="border" class="icon-mix-color" style="width:107px; float: left; border-left: 1px solid #EFEFEF;">
	<center>
		<div style="margin-top: 12px; cursor: pointer; margin-bottom: 12px;"> 
			<span class="icon-mix icon-mejs-play"></span> Mix
		</div>
	</center>
</div>
</a>
<?php
}
#
#
########################################### Tab mix ##############################################


########################################### Tab technik ###########################################
#
#
if ($_GET['stream'] == 'technik') { ?>
<style>
a.technik span.technik{ text-decoration: none !important; color: #fff !important; }
#active, #active:hover {
	color: #fff !important;
	background: #49AEC0;
	text-decoration: none !important;
}
</style>
<a class="technik" href="?app=true&stream=technik&autoplay=true">
<div id="active" style="width:107px; float: left; border-left: 1px solid #EFEFEF;">
	<center>
		<div style="margin-top: 12px; cursor: pointer; margin-bottom: 12px;"> 
			<span class="technik icon-mejs-play"></span> <span class="technik">Technik</span>
		</div>
	</center>
</div>
</a>
<?php } else { ?>
<style>
.icon-technik{
	color: #49AEC0 !important;
	text-decoration: none !important;
}
a.technik { text-decoration: none !important; color: #000 !important; }
.icon-technik-color {
	-moz-transition:width 0.8s, height 0.8s, background-color 0.8s, -moz-transform 0.8s;
    -webkit-transition:width 0.8s, height 0.8s, background-color 0.8s, -webkit-transform 0.8s;
    -o-transition:width 0.8s, height 0.8s, background-color 0.8s, -o-transform 0.8s;
    transition:width 0.8s, height 0.8s, background-color 0.8s, transform 0.8s;
}
.icon-technik-color:hover {
	color: #FFF !important;
	background: #49AEC0;
    -moz-transition:width 0.8s, height 0.8s, background-color 0.8s, -moz-transform 0.8s;
    -webkit-transition:width 0.8s, height 0.8s, background-color 0.8s, -webkit-transform 0.8s;
    -o-transition:width 0.8s, height 0.8s, background-color 0.8s, -o-transform 0.8s;
    transition:width 0.8s, height 0.8s, background-color 0.8s, transform 0.8s;
}
.icon-technik-color div:hover, 
.icon-technik-color div span.icon-technik:hover,
.icon-technik-color div span.icon-technik a:hover,
.icon-technik-color:hover .icon-technik,
.icon-technik-color .icon-technik:hover{
	color: #FFF !important;
	text-decoration: none !important;
}
a.technik:hover { text-decoration: none !important; color: #FFF !important; }
</style>
<a class="technik" href="?app=true&stream=technik&autoplay=true">
<div id="border" class="icon-technik-color" style="width:107px; float: left; border-left: 1px solid #EFEFEF;">
	<center>
		<div style="margin-top: 12px; cursor: pointer; margin-bottom: 12px;"> 
			<span class="icon-technik icon-mejs-play"></span> Technik
		</div>
	</center>
</div>
</a>
<?php
}
#
#
########################################### Tab technik ###########################################



########################################### Tab kultur ############################################
#
#
if ($_GET['stream'] == 'kultur') { ?>
<style>
a.kultur span.kultur{ text-decoration: none !important; color: #fff !important; }
#active, #active:hover {
	color: #fff !important;
	background: #FE5A27;
	text-decoration: none !important;
}
</style>
<a class="kultur" href="?app=true&stream=kultur&autoplay=true">
<div id="active" style="width:107px;float: left; border-left: 1px solid #EFEFEF;">
	<center>
		<div style="margin-top: 12px; cursor: pointer; margin-bottom: 12px;"> 
			<span class="kultur icon-mejs-play"></span> <span class="kultur">Kultur</span>
		</div>
	</center>
</div>
</a>
<?php } else { ?>
<style>
.icon-kultur{
	color: #FE5A27 !important;
	text-decoration: none !important;
}
a.kultur { 
	text-decoration: none !important; 
	color: #000 !important;
}
.icon-kultur-color {
	-moz-transition:width 0.8s, height 0.8s, background-color 0.8s, -moz-transform 0.8s;
    -webkit-transition:width 0.8s, height 0.8s, background-color 0.8s, -webkit-transform 0.8s;
    -o-transition:width 0.8s, height 0.8s, background-color 0.8s, -o-transform 0.8s;
    transition:width 0.8s, height 0.8s, background-color 0.8s, transform 0.8s;
}
.icon-kultur-color:hover {
    -moz-transition:width 0.8s, height 0.8s, background-color 0.8s, -moz-transform 0.8s;
    -webkit-transition:width 0.8s, height 0.8s, background-color 0.8s, -webkit-transform 0.8s;
    -o-transition:width 0.8s, height 0.8s, background-color 0.8s, -o-transform 0.8s;
    transition:width 0.8s, height 0.8s, background-color 0.8s, transform 0.8s;
	color: #FFF !important;
	background: #FE5A27;
}
.icon-kultur-color div:hover, 
.icon-kultur-color div span.icon-kultur:hover,
.icon-kultur-color div span.icon-kultur a:hover,
.icon-kultur-color:hover .icon-kultur,
.icon-kultur-color .icon-kultur:hover {
	color: #FFF !important;
	text-decoration: none !important;
}
a.kultur:hover { 
	text-decoration: none !important; 
	color: #FFF !important;
}
</style>
<a class="kultur" href="?app=true&stream=kultur&autoplay=true">
<div id="border" class="icon-kultur-color" style="width:107px; float:left; border-left: 1px solid #EFEFEF;">
	<center>
		<div style="margin-top: 12px; cursor: pointer; margin-bottom: 12px;"> 
			<span class="icon-kultur icon-mejs-play"></span> Kultur
		</div>
	</center>
</div>
</a>
<?php
}
#
#
########################################### Tab kultur ############################################
?>
</div>

<div style="border-top:1px solid #eee;"></div>

<div class="audio-player">   
 	<center>
    <div id="relive-infos">
    
    	<?php
    		//ReRadio Mix
			$jsonfile = file_get_contents('http://reliveradio.de/stream/' . $read . '.json');

			//DeCode Json out
			$suche = json_decode($jsonfile,TRUE);
		
    		echo '<img class="cover-call" src="http://static.reliveradio.de/logos/' .$suche["live_episode"]["db"]["slugintern"]. '.jpg">';
    	?>
    	<h1 id="coloring">Stream - <?php echo $streamtitle; ?></h1>
  	</div>
 	</center>
	<audio id="audio-player" src="http://stream.reliveradio.de:8000/<?php echo $mp3; ?>" controls="controls"></audio>
</div>
<?php
#### Autoplay ---------------------------
#
if ($_GET['autoplay'] == 'true') { 

//---------- Autoplay Script
//
?><script>
var player1;
  if($('#audio-player').length > 0){
    if($.browser.msie) {
      $('#audio-player').attr('autoplay', 'true');
    }
    player1 = new MediaElementPlayer('#audio-player', {
      features: ['playpause','autoplay','progress'],
      loop: true,
      startVolume: 0.0
    });
    if(!$.browser.msie) {
      player1.play();
    }
  }
</script><?php

} else { 

//----------- Kein Autoplay
//
?><script>
 $(document).ready(function() {
        $('#audio-player').mediaelementplayer({
            alwaysShowControls: true,
            features: ['playpause','volume','progress'],
            audioWidth: 100
        });
    });
</script><?php
}
#
### ------------------------------------x

//END APP
} else {
	echo '<!--error-->';
}
?>
</body>
</html>