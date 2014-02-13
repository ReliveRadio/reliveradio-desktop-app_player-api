<?php
/**
*
*	TESTSYSTEM für Relive ausgabe über Ajax & JsonP
*
*	@Developer: Michael McCouman jr.
*	@Mail: Support@wikibyte.org
* 	@Version: 0.0.1
*
*/	

//Stream Abfrage
if (isset($_GET["stream"]) && !empty($_GET["stream"])) { 
  $stream = $_GET["stream"];
}


//error var
$errorinfo = " Error ! ";


if ($stream == 'mix') {
	$read = $stream;
} 

elseif ($stream == 'kultur') {
	$read = $stream;
} 

elseif ($stream == 'technik') {
	$read = $stream;
} 
else { echo $errorinfo; }


	//ReRadio Mix
	$jsonfile = file_get_contents('http://reliveradio.de/stream/' . $read . '.json');

	//DeCode Json out
	$suche = json_decode($jsonfile,TRUE);

	global $suche;

######################################### Callback #########################################
if (isset($_GET["callback"]) && !empty($_GET["callback"])) {
  $callback = $_GET["callback"];

   #Header für ein JavaScript
   header("Content-Type: application/javascript");
  
  	//--------------- OUTs #START
  	echo $callback. "('";
		echo '<img class="cover-call" src="http://static.reliveradio.de/logos/' .$suche["live_episode"]["db"]["slugintern"]. '.jpg"> <h1 id="coloring">'.preg_replace("/(')+/","&rsquo;",$suche["live_episode"]["db"]["name"]).'</h1>';
	echo "')";
  	//--------------- OUTs #END
}
?>