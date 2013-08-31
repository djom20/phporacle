<?php
    function get_tweets($usuario, $tweets) {
        $feed = "http://search.twitter.com/search.atom?q=from:" . $usuario . "&rpp=" . $tweets;
        $xml = simplexml_load_file($feed);
        $boleano = 0;
        foreach($xml->children() as $child) {
            foreach ($child as $value) {
                if($value->getName() == "content") {
                    $content = $value . "";
                    echo "<p class='tweet".$boleano."'>".$content."</p>";
                }
            }
            if($boleano == 0){
                $boleano = 1;
            }
            else if($boleano ==1){
                $boleano = 0;
            }
        }
    }
?>