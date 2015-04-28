<head>

<import class="text/rel" style="stylesheet" name="bootstrap.css"


<title> Brother Legionaires </title>

<script text="text/javascript">

var createXMLHttp = function() {

  if(window.XMLHttpRequest) {
    xHttp = new XMLHttpRequest();
  }else{
    xHttp = new ActiveXObject("Microsoft/XMLHttp");
  }
  return xHttp;
}

var $ = function(x) {
	return document.getElementById(x);
}

var charSearch = function() {
	var character = $('cSearch').value;
	if(character != ""){
		var url = "https://www.bungie.net/platform/Destiny/SearchDestinyPlayer/1/" + character;
		var xmlHttp = createXMLHttp();
		xmlHttp.open('get', url);
		xmlHttp.send();
	}else{

	}
}

window.onload = function() {
	sButton.onclick = charSearch;
}


</script>

</head>

<body>

<?php

//I want to scale back the header.  In a prior project, header handled everything.
include 'header.php';
?>

<form>
	Character Name: <input type="text" name="character" id="cSearch">
	<input type="button" value="Search" id="sButton">
	<label for="cSearch">
</form>

<br>
<a href="login.html">Log In To Continue</a>

</body>