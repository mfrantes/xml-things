<?php
$filename   = "$level/templates/page.tpl";
$e_filename = "$level/templates/error/file_exists.tpl";

$substitutions = [
	"head"     => $head,
	"filename" => $filename,
	"id"       => $elementId,
	"js"       => $js,
	"xml"      => $xml,
	"xsl"      => $xsl,
	"mathjax"  => $mathjax
];

if (file_exists($filename)) {
	$html = file_get_contents($filename);
} else {
	$html = file_get_contents($e_filename);
}
foreach ($substitutions as $search => $replace) {
	$search = '{{ ' . $search . ' }}';
	$html = str_replace($search, $replace, $html);
}

echo $html;
