<?php    
    $xml = simplexml_load_file ( 'bla.xml' );
    $real = 0;

        if($xml->xpath("player/name") == $_GET['winner']){
            echo "vorhanden";
            $real = $real + 0;
           $score = $xml->xpath("player/name/wins");
            $score = $score +1;
        }else{
            echo "wird erstellt";
            $player = $xml->addChild('player');
            $player->addChild('name', $_GET['winner']);
            $player->addChild('wins', '1');
        }
    $xml->asXML('bla.xml');
?>