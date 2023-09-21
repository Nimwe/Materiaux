<?php

class Bois implements Inflammable, Dechirable{
    public function enflamme(){
        echo "Le bois brûle <br>";
    }
    public function dechire(){
        echo "Le bois ne se dechire pas <br>";
    }
    public function bruler(){
        return true ;
    }
    public function dechirer(){
        return false ;
    }
    
}

?>