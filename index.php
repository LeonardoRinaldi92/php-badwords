<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <form action="risposta.php" method="POST">
        <div style = "width: 30%; display : flex; flex-direction: column">
            <label for="parola">parola</label>
            <input type="text" placeholder="inserisci la parola da bannare"  name="parolaBan">
            
            <label for="">testo</label>
            <textarea  id="testo" cols="30" rows="10" placeholder="inserisci un testo" name="testoToBan"></textarea>

            <button type="submit">Vai!</button>
        </div>
    </form>

    
</body>
</html>