<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Actions</title>
  <link rel="stylesheet" href="../css/normalize.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../favicon.ico">
  <link rel="stylesheet" href="../css/simple.css">
  <link rel="stylesheet" href="../css/colors.css">
  <link rel="stylesheet" href="../css/custom.css">
</head>
<body onload="displayResult('../xml/xsl/actions/actions.xsl', '../xml/actions/actions.xml', 'actions', '../js/MathJax-2.7.4/MathJax.js?config=MML_CHTML')">
  <div id="actions"></div>
	<div class="container">
	<?php

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
	echo "  <p>Toggle this code on or off.</p>\n";
	// */

	//*
	echo "  <p>Toggle this code...</p>\n";
	/*/
	echo "  <p>...Or this code.</p>\n";
	// */
	?>
	</div>
  <script src="../js/showContent.js"></script>
</body>
</html>
