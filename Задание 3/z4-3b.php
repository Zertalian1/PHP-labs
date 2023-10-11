<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<head>

</head>

<body>

<?php
$correct_answers_arr = array("6", "9", "4", "1", "3", "2", "5", "8", "7");
$user = $_POST["user"];
$answers = $_POST["answers"];
print "<p>$user";
$num_of_correct = count($correct_answers_arr) - count(array_diff_assoc($answers, $correct_answers_arr));

switch ($num_of_correct) {
    case 9:
        print "<p>великолепно знаете географию";
        break;
    case 8:
        print "<p>отлично знаете географию";
        break;
    case 7:
        print "<p>очень хорошо знаете географию";
        break;
    case 6:
        print "<p>хорошо знаете географию";
        break;
    case 5:
        print "<p>удовлетворительно знаете географию";
        break;
    case 4:
        print "<p>терпимо знаете географию";
        break;
    case 3:
        print "<p>плохо знаете географию";
        break;
    case 2:
        print "<p>очень плохо знаете географию";
        break;
    default:
        print "<p>вообще не знаете географию";
}
print "<p><a href='z4-3a.html'>назад</a>";
?>

</body>

</html>