<html> <head>
</head> <body>

<?php

function Ru($color) { print "<p style=\"color:$color\">Здравствуйте!</p>"; }
function En($color) { print "<p style=\"color:$color\">Hello!</p>"; }
function Fr($color) { print "<p style=\"color:$color\">Bonjour!</p>"; }
function De($color) { print "<p style=\"color:$color\">Guten Tag!</p>"; }

$language = $argv[1];
$color = $argv[2];

$language($color);

?>
</body> </html>