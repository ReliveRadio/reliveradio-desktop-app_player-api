<?php
//Stream Abfrage
if (isset($_GET["s"]) && !empty($_GET["s"])) { 
  
  $stream_get_name = $_GET["s"];

	if ($stream_get_name == 'mix') {
		$stream = "mix";
	} 
	elseif ($stream_get_name == 'kultur') {
		$stream = "kultur";
	}
	elseif ($stream_get_name == 'technik') {
		$stream = "technik";
	}
	else {
		$stream = "mix";
	}

} else {
	echo '<!--ERROR AJAX-->';
}
?>
/**
*	Callback Cover & Information
*/
setInterval( function jsonp(){
  var scripts = document.getElementsByTagName("script"); 
  	for (i=0; i<scripts.length; i++) { 
  		var url = scripts[i].getAttribute("src"); 
  			if(!url) continue; if(url.indexOf("callback")>=0) { 
  				scripts[i].parentNode.removeChild(scripts[i]); 
  			} 
  	}
  var now = new Date(); 
  	url = "ajax/ajax.php?time="+now.getTime()+"&stream=<?php echo $stream; ?>&callback=callback";
  	
  var script = document.createElement("script"); 
  	script.setAttribute("src", url); script.setAttribute("type", "text/javascript"); 
  	document.getElementsByTagName("head")[0].appendChild(script);
}, 63000);

function callback(data) { 
	document.getElementById("relive-infos").innerHTML = data; 
}