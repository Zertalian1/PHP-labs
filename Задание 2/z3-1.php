<html>
<head>
    <style>
        td {
            padding: 5px;
        }
    </style>
</head>
<body>
<table  border=1>
    <?php
    $color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));

    $i = 1;
    while ($i <= 10) {
        print "<tr>\n";
        $j = 1;
        while ($j <= 10) {
            if ($i == $j) {
                print "\t<td bgcolor=\"$color\">";
            } else {
                print "\t<td>";
            }
            print ($i*$j);
            print "</td>\n";
            $j++;
        }
        print "</tr>\n";
        $i++;
    }
    ?>
</table>
</body>
</html>