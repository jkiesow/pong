<?php
    $xml = simplexml_load_file ( 'bla.xml' );
    
    foreach($xml->children() as $child){
        if($child->scorep1 >= 9 || $child->scorep2 >= 9){
            $child->running="false";
        }
        if($child->running=="true"){
            echo "<table>";
            echo "<tr>";
            echo "<th>Player 1</th>";
            echo "<th>Player 2</th>";
            echo "<th>Score</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>", $child->namep1 , "</td>";
            echo "<td>", $child->namep2, "</td>";
            echo "<td>", $child->scorep1, " : ", $child->scorep2, "</td>";
            echo "</tr>";
            echo "</table>";
        }
        
    
    }
    

?>