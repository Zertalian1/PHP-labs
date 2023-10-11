<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<head>
</head>

<body>

<?php


$user = $_POST["user"];
$hobby = $_POST["hobby"];

print "<p>$user, имеет следующие хобби:";

print "<ul>\n";
foreach ($_POST as $key => $value) {
    print "$key = $value<br>\n";
}
print "</ul>\n";

?>
</body>

</html>