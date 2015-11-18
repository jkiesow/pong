 <?php
    $pong = simplexml_load_file ( 'bla.xml' );
    $real = 0;
    foreach($pong->game as $child){
    if($child->running == "true" && $child->namep1 == $_GET['namep1'] && $child->namep2 == $_GET['namep2']){
        echo "Game is already running!";
        $real = $real + 0;
        $child->scorep1 = $_GET['scorep1'];
        $child->scorep2 = $_GET['scorep2'];
    }else{
            $real = $real + 1;
        }
}
    if($real == $pong->count()){
        $game = $pong->addChild('game');
        $game->addChild('namep1', $_GET['namep1']);
        $game->addChild('namep2', $_GET['namep2']);
        $game->addChild('scorep1', $_GET['scorep1']);
        $game->addChild('scorep2', $_GET['scorep2']);
        $game->addChild('running', $_GET['running']);
    }
    
    echo $pong->asXML( 'bla.xml' );
 ?>