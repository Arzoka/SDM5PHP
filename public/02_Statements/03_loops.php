<h1>Loops.</h1>
<h2>Opdracht 1</h2>
Geef met maximaal 3 regels php de getallen 1 tot en met 99 weer<br>

<?php
    for ($i = 0; $i < 99 ;$i++) {
        echo strval($i + 1) . '<br>';
    }
?>

<h2>Opdracht 2</h2>
Geef $counter weer zolang $counter < 87<br>
Tel tijdens elke loop 2 bij $counter op<br>
Het eerste getal dat je weergeeft is 0<br>
Elke counter op een losse regel<br>

<?php
    $counter = 0;
    while ($counter < 87) {
        echo strval($counter) . '<br>';
        $counter += 2;
    }
?>

<h2>Opdracht 3</h2>
Geef twee getallen weer in dezelfde loop<br>
Getal A begint bij 0<br>
Getal B begint bij 33<br>
Laat dit zien zolang getal A kleiner is dan getal B<br>

<?php
    $a = 0;
    $b = 33;

    while ($a < $b) {
        echo 'A: ' . strval($a) . ' | ' . 'B: ' . strval($b) . '<br>';
        $a += 2;
        $b += 1;
    }
?>

<h2>Opdracht 4</h2>
Geef de getallen 1 tot en met 99 weer<br>
Sla de volgende getallen over: 99, 2, 5<br>
Zodra het getal deelbaar is door 2 moet je de kleur aanpassen van de tekst<br>
Als het getal groter is dan 78 mag je het script afbreken.

<?php
    for ($i = 0; $i < 99; $i++) {
        if ($i === 99 || $i === 2 || $i === 5 ) {
            continue;
        }
            if ($i > 78) {
                break;
            }
            if ($i % 2 == 0) {
                echo '<p style="color: #ff0000">' . strval($i) . '</p>';
            }
            else {
                echo '<p>' . strval($i) . '</p>';
            }
        }
?>

