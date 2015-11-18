 <?php
     $xml = simplexml_load_file ( 'bla.xml' );

     $pong = $xml->addChild("pong");

     $player = $pong->addchild("player");

     $game = $pong->addchild("game");
     
     $pong->addAttribute('',''); 

     $player->addChild("name","test");

     $player->addChild("win","1");

     $game->addChild("namep1","1");

     $game->addChild("namep2","2");
    
     $game->addChild("scorep1","1");

     $game->addChild("namep2","2");

     echo $xml->saveXML( 'log.xml' );
 ?>