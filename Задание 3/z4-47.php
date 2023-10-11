<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<head>
    <title> z4-47 </title>
</head>

<body>

<?php

$PARAMS = ($_SERVER['REQUEST_METHOD'] == 'POST') ? $_POST : $_GET;

$user = $PARAMS["user"];

print "<p>$user, имеет следующие хобби:";

print "<ul>\n";
foreach ($PARAMS as $key => $value) {
    if (gettype($value) == "array") {
        print "$key = <br>\n";
        foreach ($value as $v)
            print "$v<br>";
    } else {
        print "$key = $value<br>\n";
    }
}
print "</ul>\n";

?>
</body>

</html>