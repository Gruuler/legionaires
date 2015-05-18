// Creates a $ variable that takes a value, x, and searches the document for anything with an ID = x

var $ = function(x) {
	return document.getElementById(x);
}

// Script to create an XML Http variable.  Used in Index.php

var createXMLHttp = function() {

  if(window.XMLHttpRequest) {
    xHttp = new XMLHttpRequest();
  }else{
    xHttp = new ActiveXObject("Microsoft/XMLHttp");
  }
  return xHttp;
}

var submitForm = function() {
	var shouldSubmit = true;

	//Check on Username
	if($('uName').value.length < 3) {
		shouldSubmit = false;
		$('badUser').innerHTML = "Username does not meet length requirements.";
	}else{
		$('badUser').innerHTML = "";
	}

	//Check on Password
	if($('password').value.length < 6) {
		shouldSubmit = false;
		$('badPassword').innerHTML = "Password does not meet length requirements.";
	}else{
		$('badPassword').innerHTML = "";
	}

	//Final check, passes form on if approved.
	if(shouldSubmit) {
		var url = "scripts/login.php"
		var post = "uName=".$('uName')."&password=".$('password')
		var xml = createXMLHttp();
		xmlHttp.open('POST',url,true);
		xmlHttp.send(post);
		xmlHttp.onreadystatechange = function() {
			if(xmlHttp.readyState == 4) {
				var results = JSON.parse(xmlHttp.responseText);				
			}
		}
	}
}

var charSearch = function() {
	var character = $('cSearch').value;
	if(character != ""){
		var url = "https://www.bungie.net/platform/Destiny/SearchDestinyPlayer/1/" + character;
		var xmlHttp = createXMLHttp();
		xmlHttp.open('get', url);
		xmlHttp.send();
	}
}


//When the window loads, this function declares specific vaiables tied in to the page.
window.onload = function() {
	$("loginSubmit").onclick = submitForm;
	$("sButton").onclick = charSearch;
}