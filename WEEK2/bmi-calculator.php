<!DOCTYPE html>
    <head>
</head>

<body>
    <form method="post" action = "<?php echo $_SERVER('PHP_SELF'); ?>">
<label>Height (cm)</label>
<input name="height">
<label>Weight (kg)</label>
<input name="weight">
<input type="submit" value = "'Calculate">
</form>
</body>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $height = $_POST['heightVal'];
    $weight = $_POST['weightVal'];

    $bmi =$weight/($height * $height);
}
?>

<?php
echo $bmi;
?>
</html>
