<!DOCTYPE html>
<html>

<head>
<script type="text/javascript" src="html5kellycolorpicker.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

<p>Enter text and color, then click "Submit" to submit the form:</p>

<form id="frm1" action = "/action_page.php">
    Text: <input type="text" name="mytext"><br>
    <canvas id="picker"></canvas><br>
    <input id="color" value="#54aedb">
    <form id='myform' action='formmail.pl'>
    <script>new KellyColorPicker({place : 'picker', input : 'color', size : 150});
        </script>
    <input type="button" id="btn1" onclick="myFunction()" value="Submit">
	</form>
</form>

</body>

<?php
// Load the HTML document
$doc = new DOMDocument;
$doc->loadHtmlFile( 'record.html');

// Get the parent node where you want the insertion to occur
$parent = $doc->getElementsByTagName('body')->item( 0);

// Create the child element 
$child = $doc->createElement( 'span');
$child->setAttribute( 'class', 'text');

// Append (insert) the child to the parent node
$parent->appendChild( $child);

// Save the resulting HTML
echo $doc->saveHTML();
?>

