function xhrTimeout() {
	console.error("The request for " + this.url + " timed out.");
}

function xhrError() {
	console.error(this.statusText);
}

function xhrSuccess() {
	this.callback.apply(this, this.arguments);
}

function loadFile(url, timeout, callback, id, src) {
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

function loadMathJax(src) {
	var script = document.createElement("script");
	script.type = "text/javascript";
	script.src = src;
	document.getElementsByTagName("head")[0].appendChild(script);
}

function importXsltStylesheet() {
	xp.importStylesheet(this.responseXML);
}

function appendFragment(id, src) {
	document.getElementById(id).appendChild(xp.transformToFragment(this.responseXML, document));
	loadMathJax(src);
}

function displayResult(sPath, path, id, src) {
	xp = new XSLTProcessor();
	loadFile(sPath, 2000, importXsltStylesheet);
	loadFile(path, 2000, appendFragment, id, src);
}
