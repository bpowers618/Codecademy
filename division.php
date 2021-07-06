<html>
<body>
<?php print_r($_GET)?>
<?=$_GET['numerator']+$_GET['denominator']?> <br> <br>
<?="The quotient of ${_GET['numerator']} and ${_GET['denominator']} is:"?>
<h4> <?=$_GET['numerator'] / $_GET['denominator']?> </h4>
<a href="index.php">Reset</a>
</body>
</html>