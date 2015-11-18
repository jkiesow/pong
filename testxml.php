 <?php
    $xml = simplexml_load_file ( 'bla.xml' );
    $real = 0;
    foreach($xml->games->game as $game){
        echo "For each initialisiert</br>";
        if($game->namep1 == $_GET['namep1'] &&
        $game->namep2 == $_GET['namep2'] &&
           $game->running == "true"){
             $game->scorep1 = $_GET['scorep1'];
             $game->scorep2 = $_GET['scorep2'];
            $real = $real;
            echo "Wird aktualisiert</br>";
        }else{
            $real = $real + 1;
            echo "real +1 </br>";
    }

        
    }
    if($real == $xml->games->count()){
        echo "Wird neu erstellt </br>";
        echo "Anzahl nodes: " + $xml->games->count() + "</br>";
            $newgame = $xml->games->addChild('game');
            $newgame->addChild('namep1', $_GET['namep1']);
            $newgame->addChild('namep2', $_GET['namep2']);
            $newgame->addChild('scorep1', $_GET['scorep1']);
            $newgame->addChild('scorep2', $_GET['scorep2']);
            $newgame->addChild('running', $_GET['running']);
    }

    if(empty($xml->games)){
                    echo "Wird erstellt weil leer!</br>";
            $newgame = $xml->games->addChild('game');
            $newgame->addChild('namep1', $_GET['namep1']);
            $newgame->addChild('namep2', $_GET['namep2']);
            $newgame->addChild('scorep1', $_GET['scorep1']);
            $newgame->addChild('scorep2', $_GET['scorep2']);
            $newgame->addChild('running', $_GET['running']);
    }

    
    $xml->asXML( 'bla.xml' );
 ?>