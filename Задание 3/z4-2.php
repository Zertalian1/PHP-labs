<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<head>
    <title> Листинг 10-1. Простая HTML-форма </title>
</head> <body>

<?php

if (!isset($_POST["align"])) {
    $align = "left";
} else {
    $align = $_POST["align"];
}

if (!isset($_POST["valign"])) {
    $valign = array("top");
} else {
    $valign = $_POST["valign"];
}

print "<table  border=1>\n";


print "<tr style='height: 100px;'>\n";
print "\t<td style='width: 100px; text-align:$align;' valign='$valign[0]'>";
print "Текст";
print "</td>\n";

print "</tr>\n";

print "</table>\n";

?>


<form action="z4-2.php" method="POST">
    <p>Выберите горизонтальное расположение
    <p><label>
            <input type="radio" name="align" value="left">
        </label>слева</p>
    <p><label>
            <input type="radio" name="align" value="center">
        </label>по центру</p>
    <p><label>
            <input type="radio" name="align" value="right">
        </label>справа</p>

    <p><p>Выберите вертикальное расположение
    <p><label>
            <input type="checkbox" name="valign[]"
                   value="top">
        </label>сверху

    <p><label>
            <input type="checkbox" name="valign[]"
                   value="middle">
        </label>посередине

    <p><label>
            <input type="checkbox" name="valign[]"
                   value="bottom">
        </label>внизу

    <p><input type="submit" value="Выполнить"></p>
</form>

</body> </html>