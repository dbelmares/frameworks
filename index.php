<?php 
$GLOBALS['$format_salario'] = 0;
if (isset($_POST['imprimir'])) {
	$salario = $_POST['salario'];
	$GLOBALS['$format_salario'] = ("$ " . number_format($salario,2));
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Moneda</title>
</head>
<body>
	<div style="width:40%;margin:0 auto; margin-top:25px;">
		<h2 align="center">Formato Número</h2>
		<hr>
		<form name="form1" method="post">
			<label>Ingrese Salario</label>
			<input type="text" name="salario">
			<hr>
			<label>Salario Con Formato </label>
			<input type="text" name="formato-salario" value="<?php echo $GLOBALS['$format_salario']; ?>">
			<hr>
			<button type="submit" name="imprimir" >Imprimir</button>
			<?php 
			

			?>

		</form>
	</div>
</body>
</html>