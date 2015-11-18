 <?php
     $xml = simplexml_load_file ( 'bla.xml' );

     $pong = $xml->xpath('pong');

     $player = $pong->addchild('player');

     $game = $pong->addchild('game');
     
   //  $pong->addAttribute('',''); 

     $player->addChild('name','test');

     $player->addChild('win','1');

     $game->addChild('namep1',$_GET['namep1']);

     $game->addChild('namep2',$_GET['namep2']);
    
     $game->addChild('scorep1',$_GET['scorep1']);

     $game->addChild('scorep2',$_GET['scorep2']);

     echo $xml->asXML( 'bla.xml' );
 ?>