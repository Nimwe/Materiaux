<?php

class Papier implements Inflammable, Dechirable {
    public function enflamme(){
        echo "Le papier brûle <br>";
    }
    public function dechire(){
        echo "Le papier est déchiré <br>";
    }
    public function bruler(){
        return true ;
    }
    public function dechirer(){
        return true ;
    }
    
}

?>