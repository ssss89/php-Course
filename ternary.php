<?php

$q = 'h';
var_dump($q); echo "<br>";
print_r($q[3]);


if(isset($_POST['save'])){

	$v = $_POST['v'];
	$c = $_POST['c'];
	$d = $_POST['d'];
	$l = $_POST['l'];

	$s = $v*$c/$l+$d;

	$d = $s>100 ? "high" : "low";
	echo '<h1>'. $d . '</h1>' ;
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/css.css">
</head>
<body>
	
	 <div class="signuppage">
	 	<h2>syntax: condition ? true : false;</h2>
	 	<h1>Ternary Operator</h1>
 	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" >
 	
 	<div class="form-group">
 		<input type="text" name="v">
 		</div>
 	<div class="form-group">
 		<input type="text" name="d">
 	</div>
 	<div class="form-group">
 		<input type="text" name="c">
 	</div>
 	<div class="form-group">
 		<input type="text" name="l">
 	</div>
 	<input type="submit" name="save">
 	
 </form>
 </div>

</body>
</html>