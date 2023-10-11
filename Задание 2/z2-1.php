<html> <head>
</head> <body>

<?php
	$color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
    $size = random_int(16, 40);
    print "$size";
    print "<p><font color=\"$color\" size=\"$size\">PHP работает!</font>";
?>

</body> </html>