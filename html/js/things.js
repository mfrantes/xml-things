function xhrTimeout() {
	console.error("The request for " + this.url + " timed out.");
}

function xhrError() {
	console.error(this.statusText);
}

function xhrSuccess() {
	this.callback.apply(this, this.arguments);
}

function loadFile(url, timeout, callback) {
	var xhr = new XMLHttpRequest();
	xhr.url = url;
	xhr.timeout = timeout;
	xhr.callback = callback;
	xhr.arguments = Array.prototype.slice.call(arguments, 3);
	xhr.ontimeout = xhrTimeout;
	xhr.onload = xhrSuccess;
	xhr.onerror = xhrError;
	xhr.open("GET", url, true);
	xhr.send(null);
}

function loadMathJax() {
	var script = document.createElement("script");
	script.type = "text/javascript";
	script.src = "js/MathJax-2.7.4/MathJax.js?config=MML_CHTML";
	document.getElementsByTagName("head")[0].appendChild(script);
}

function importXsltStylesheet() {
	xp.importStylesheet(this.responseXML);
}

function appendFragment() {
	document.getElementById("things").appendChild(xp.transformToFragment(this.responseXML, document));
	loadMathJax();
}

function displayResult(){
	xp = new XSLTProcessor();
	loadFile("xml/xsl/things.xsl", 2000, importXsltStylesheet);
	loadFile("xml/things.xml", 2000, appendFragment);
}
