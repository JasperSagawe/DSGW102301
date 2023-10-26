<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="primzahl.css">
    <title>Primzahlüberprüfung</title>
</head>

<body>
    <h1>Primzahlüberprüfung</h1>

    <form method="post">
        Bitte geben Sie eine Zahl ein: <input type="text" name="number">
        <input type="submit" value="Überprüfen">
    </form>

    <?php
    function isPrime($number)
    {
        if ($number <= 1)
            return false;
        if ($number <= 3)
            return true;
        if ($number % 2 == 0 || $number % 3 == 0)
            return false;

        for ($i = 5; $i * $i <= $number; $i += 6) {
            if ($number % $i == 0 || $number % ($i + 2) == 0)
                return false;
        }

        return true;
    }

    if (isset($_POST['number'])) {
        $inputNumber = intval($_POST['number']);
        $isPrime = isPrime($inputNumber);

        if ($isPrime) {
            echo $inputNumber . ' ist eine Primzahl.';
        } else {
            echo $inputNumber . ' ist keine Primzahl.';
        }
    }
    ?>
</body>

</html>