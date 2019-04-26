<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Máy tính của Thi béo</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
if(isset($_POST['count'])){
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$operation = $_POST['operation'];
	switch ($operation) {
		case 'Add':
			$results =$num1+$num2;
			break;
		case 'Sub':
			$results =$num1-$num2;
			break;
		case 'Mul':
			$results =$num1*$num2;
			break;
		case 'Div':
			$results =$num1/$num2;
			break;
	}}
?>
<div class="calculator">
	<h1 class="title">CALCULATOR</h1>
	<form method="post" action="index.php">
		<input type="text" name="num1" class="num" autocomplete="off" placeholder="Nhap so thu nhat">
		<input type="text" name="num2" class="num" autocomplete="off" placeholder="Nhap so thu hai">
		<select class="opt" name="operation">
			<option value="Add">+</option>
			<option value="Sub">-</option>
			<option value="Mul">*</option>
			<option value="Div">/</option>
		</select>
		<input type="submit" name="count" value="Count" class="button">
	</form>
	<?php if(isset($_POST['count'])){	?>
		<input type="text" value="<?php echo $results; ?>" class="num">
	<?php }else { ?>
		<input type="text" value="0" class="num">
	<?php } ?>
</div>
</body>
</html>
