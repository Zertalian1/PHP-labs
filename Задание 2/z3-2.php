<html>
<head>
    <style>
        td {
            padding: 5px;
        }
    </style>
</head>
<body>
<table border=1>
    <?php
    $color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));

    $i = 0;
    while ($i <= 10) {
        print "<tr>\n";
        for ($j = 0; $j <= 10; $j++) {
            if ($i == 0 && $j == 0) {
                print "\t<td style=\"color:red; font-size:32px;\"><b>+</b></td>\n";
                continue;
            }
            if ($i == 0 || $j == 0) {
                print "\t<td style=\"color:$color\">";
            } else {
                print "\t<td>";
            }
            print ($i + $j);
            print "</td>\n";
        }
        print "</tr>\n";
        $i++;
    }
    ?>
</table>
</body>
</html>