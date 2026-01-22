<!DOCTYPE html>

<body>
     <form method="post" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
<label>Kelvin (K)</label>
<input name="kelvin">
<input type="submit" value = "Calculate">
</form>
</body>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $kelvin = $_POST['kelvin'];
    $calcius = -273.15;

    $Cel = $kelvin - $calcius;
}
?>

<?php
echo $Cel;
?>
</html>