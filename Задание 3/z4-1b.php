<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<head>

</head>

<body>

<?php

$align = $_POST["align"];
$valign = $_POST["valign"];

print "<table  border=1>\n";


print "<tr style='height: 100px;'>\n";
print "\t<td style='width: 100px; text-align:$align;' valign='$valign[0]'>";
print "Текст";
print "</td>\n";

print "</tr>\n";

print "</table>\n";
print "<p><a href='z4-1a.html'>назад</a>";

?>

</body>

</html>