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

