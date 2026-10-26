<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Analiza liczb od 1 do 100</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        .podsumowanie {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>Analiza liczb od 1 do 100</h1>

    <?php
    $suma_wszystkich = 0;
    $suma_parzystych = 0;
    $suma_nieparzystych = 0;
    $licznik_podzielnych_przez_3 = 0;

    for ($i = 1; $i <= 100; $i++) {
        $suma_wszystkich += $i;
        
        $wynik = "$i - ";
        
        if ($i % 2 == 0) {
            $wynik .= "parzysta";
            $suma_parzystych += $i;
        } else {
            $wynik .= "nieparzysta";
            $suma_nieparzystych += $i;
        }
        
        if ($i % 3 == 0) {
            $wynik .= ", podzielna przez 3";
            $licznik_podzielnych_przez_3++;
        }
        
        echo $wynik . "<br>\n";
    }
    ?>

    <div class="podsumowanie">
        <h2>Podsumowanie:</h2>
        <?php
        echo "Suma wszystkich liczb: " . $suma_wszystkich . "<br>";
        echo "Suma liczb parzystych: " . $suma_parzystych . "<br>";
        echo "Suma liczb nieparzystych: " . $suma_nieparzystych . "<br>";
        echo "Liczb podzielnych przez 3: " . $licznik_podzielnych_przez_3 . "<br>";
        ?>
    </div>

</body>
</html>