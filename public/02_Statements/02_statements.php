<h1>Statements.</h1>
Op basis van variabele $mijnVar moeten de volgende mogelijkheden zichtbaar zijn<br>
Per vraag moet er 1 statement gemaakt worden die alles kan controleren.<br>
<br>
<h2>Vraag 1, $mijnVar is een kleur:</h2>
1- wat is $mijnVar als de onderstaande vragen niet kloppen<br>
2- geef aan of de $mijnVar rood is<br>
3- is $mijnVar geel<br>
4- is $mijnVar groen<br>
<br>

<h2>Vraag 2, $mijnVar is mogelijk een getal:</h2>
1- is $mijnVar echt een getal<br>
2- als 1 waar is, is het dan kleiner dan 4<br>
3- als 1 waar is en 2 niet, is het dan wel groter dan 5<br>
4- kan $mijnVar dan 4 zijn?

<h2>Vraag 3, $mijnVar is onbekend:</h2>
1- is $mijnVar een string<br>
2- als 1 waar is, is het eerste karakter dan een getal?<br>
3- als 1 niet waar is, is het dan misschien een boolean?<br>
<br>

<?php
    $mijnVar = 2;


    isColor($mijnVar);
    isNumber($mijnvar);
    isType($mijnVar);

    function isColor($arg) {
        switch($arg) {
            case 'rood':
                echo 'Var is rood <br>';
                break;
            case 'geel':
                echo 'Var is geel <br>';
                break;
            case 'groen':
                echo 'Var is groen <br>';
                break;
            default:
                echo 'Var is ' . $arg . '<br>';
                break;
        }
    }

    function isNumber($arg) {
        if (is_numeric($arg)) {
            if ($arg < 4) {
                echo 'Var is kleiner dan 4 <br>';
            }
            elseif ($arg > 5) {
                echo 'Var is groter dan 5 <br>';
            }
            else {
                echo 'Var is 4 OF 5 <br>';
                switch($arg) {
                    case 4:
                        echo 'Var is 4 <br>';
                        break;
                    case 5:
                        echo 'Var is 5 <br>';
                        break;
                }
            }
        }
        else {
            echo 'Var is niet een nummer <br>';
        }
    }

    function isType($arg) {
        if (is_string($arg)) {
            if (is_numeric($arg[0])) {
                echo 'Eerste karakter van Var is een getal <br>';
            } else {
                echo 'Var is een string';
            }
        }
        else {
            if (is_bool($arg)) {
                echo 'Var is een boolean <br>';
            }
            else{
                echo 'Var is niet een string en ook geen boolean <br>';
            }
            
        }
    }
?>

