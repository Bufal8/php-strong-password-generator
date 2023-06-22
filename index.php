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
            // var_dump($length);
            settype($length, 'integer');
            $generaPassw = generateRandomString($length);
            echo $generaPassw;

            // var_dump($randomString);
            // // Funzione generatore caratteri
            function generateRandomString($length) {
                // Queste variabili restituiscono un array di valori dal minimo al massimo
                $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?$&()£";
                $charactersLength = strlen($characters);
                $passw = "";
                $x = 0;
                // Finchè all'incremento di valore x non ha raggiunto il valore di $charactersLength non esce dal ciclo
                while (++$x <= $length) {
                    // Associa a password il valore di se stesso più un carattere random preso dall'array $characters
                    $passw = $passw . $characters[rand(0,$charactersLength - 1)];
                };
                return $passw;

            };
            // generateRandomString();

            // generateRandomString();
            // echo $randomString;

        ?>
    </form>

    
</body>
</html>