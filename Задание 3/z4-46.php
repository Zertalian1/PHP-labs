<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<head>
    <title> z4-46 </title>
</head>

<body>

<?php


$user = $_POST["user"];

$hobby = $_POST["hobby"];

print "<p>$user, имеет следующие хобби:";

print "<ul>\n";
foreach ($_POST as $key => $value) {
    if (gettype($value) == "array") {
        print "$key = <br>\n";
        foreach ($value as $v) {

            print "$v<br>";
        }
    } else {
        print "$key = $value<br>\n";
    }
}
print "</ul>\n";

?>
</body>

</html>