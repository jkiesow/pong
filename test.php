<?php
    $file ='test.txt';    // Name des Files
    $current = file_get_contents($file); // Inhalt des aktuellen Files
    $data = $_GET["text"]; // Übergabeparameter 
    $current = $data; // Inhalt wird gleich dem parameter gesetzt
    file_put_contents($file, $current); // File wird überschrieben
    echo $current; // Gibt den Inhalt des Files wieder
?>