<?php
$charset  = "UTF-8";
$mjConfig = 'MML_CHTML';

$docRoot = '/things';

$cssRoot = "$docRoot/css";
$js      = "$docRoot/js/showContent.js";
$xml     = "$docRoot/xml/$xmlFile";
$xsl     = "$docRoot/xml/xsl/$xslFile";
$mathjax = "$docRoot/js/MathJax-2.7.4/MathJax.js?config=$mjConfig";

$head = <<<"EOM"

	<meta charset="$charset">
	<title>$docTitle</title>
	<link rel="stylesheet" href="$cssRoot/normalize.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="$docRoot/favicon.ico">
	<link rel="stylesheet" href="$cssRoot/simple.css">
	<link rel="stylesheet" href="$cssRoot/colors.css">
	<link rel="stylesheet" href="$cssRoot/custom.css">

EOM;

//====================
// CATEGORY LARGE FONT
//====================

//--------------------------
// Sub-Category Smaller Font
//--------------------------

/* Title Here Notice the First Letters are Capitalized */

# Option 1
# Option 2
# Option 3

/*
* This is a detailed explanation
* of something that should require
* several paragraphs of information.
*/

// This is a single line quote

//*
$toggle1 = true;
// */

//*
$toggle2 = true;
/*/
$toggle2 = false;
// */
