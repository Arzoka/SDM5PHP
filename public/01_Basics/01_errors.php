<!-- <h1>Error handling</h1>
Zorg dat errors weergegeven worden.<br>
Test met de volgende code:<br>
<pre>
    < ?php
    echo $mijn_item;
</pre> -->

<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);
    echo $mijn_item;
?>