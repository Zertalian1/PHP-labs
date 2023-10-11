<html> <head>
</head> <body>

<?php
    if (count($argv) == 1) {
        print('Use: php z2-5.php lang');
    } else {
        $lang = $argv[1];
        if ($lang == "ru") {print "русский";}
        elseif ($lang == "en") {print "английский";}
        elseif ($lang == "fr") {print "французский";}
        elseif ($lang == "de") {print "немецкий";}
        else {print "язык неизвестен";}
    }
?>

</body> </html>