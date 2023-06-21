<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>BoolPass</title>
</head>
<body>
    <form>
        <label for="lenght">Lunghezza desiderata della mail</label>
        <input type="number" name="length" id="length">
        <input type="submit" value="GENERA PASSWORD">
        <?php
        // Tramite il metodo _GET ottengo il valore inserito nell' input
            $length = $_GET['length'];
            // Ciclo for per creare un carattere numerico fino alla lunghezza scelta
            for ($i=1; $i === $length; $i++) { 
                // Pusho in un array vuoto un numero random da 0 a 9
                $passw[] = mt_rand(0,9);
                
            }
            var_dump($passw);
            
        ?>
    </form>
</body>
</html>