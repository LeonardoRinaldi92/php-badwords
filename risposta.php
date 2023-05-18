<?php 
    $testo = $_POST['testoToBan'];
    $parola = $_POST['parolaBan'];
    $parolaColorata = '<span style="color : red">'. $parola . '</span>';
    $TextLenght = strlen($testo);
    $testoColorato = str_replace($parola, $parolaColorata, $testo);
    $TextBan = str_replace($parola, '***', $testo);
    $TextLenghtBan = strlen($TextBan);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>risposta</title>
</head>
<body>
    <h1>
        vuoi eliminare : <?php echo $parola ?>
    </h1>
    <h3>
        Hai digitato : <?php echo $TextLenght ?> caratteri 
    </h3>
    <p>
        il tuo testo era : <br>
        "<?php echo $testoColorato ?>"
    </p>
    <h3>
        il testo bandito è: <br>
    </h3>
    <p>
        "<?php echo $TextBan ?>"
    </p>
    <span>
        con una lunghezza di <?php echo $TextLenghtBan ?> caratteri.
    </span>
</body>
</html>