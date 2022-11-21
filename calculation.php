<html>
<head>
<title>Simple Math With User Input</title>
</head>
<body>
<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$a = $num1 + $num2;
$b = $num1 - $num2;
echo "The sum of the two numbers is ". $a;
echo "The difference of the two numbers is ". $b;
?>
</body>
</html>
