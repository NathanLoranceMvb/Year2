<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logged in</title>
</head>

<body style="background-color: <?php echo $_POST["color"]?>;">
    <?php echo "Voornaam is: " . $_POST["voornaam"];?>
    <br>
    <?php echo "achternaam is: " . $_POST["achternaam"];?>
    <br>
    <?php echo "klas is: " . $_POST["klas"];?>
    <br>
    <?php echo "leeftijd is: " . $_POST["leeftijd"];?>
    <br>
    <?php echo "adres is: " . $_POST["adres"];?>
    <br>
    <?php echo "woonplaats is: " . $_POST["woonplaats"];?>
    <br>
    <?php echo "gender is: " . $_POST["gender"] ?>

    <?php $_POST["color"]?>
</body>

</html>