<?php
    $dom = new DOMDocument();
    $dom->load( 'bla.xml' );
    $domElemsToRemove = array();
    $games=$dom->getElementsByTagName( "game" );
    foreach( $games as $child){
        if($child->getElementsByTagName( "scorep1" )->nodevalue == 9 || $child->getElementsByTagName("scorep2")->nodevalue == 9){
            echo "ping";
            $child->getElementsByTagName("running")->nodevalue = "false";
            $domElemsToRemove[] = $child;
            
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
        foreach( $domElemsToRemove as $child ){
        $child->parentNode->removeChild($child);
        }
echo $dom->save( 'bla.xml' );
?>