<?php
require ('Inflammable.php');
require ('Dechirable.php');
require ('papier.php');
require ('bois.php');

$p = new Papier();
$b = new Bois();

/* Methode 1 :
$materiaux = array();

array_push ($materiaux, $b);
array_push ($materiaux, $p);
*/

//Methode 2 :
$materiaux = [new Papier(), new Bois()];

foreach ($materiaux as $m){

    if ($m->bruler()){
        echo "Le ".(get_class($m))." brûle <br>" ;
    }else{
        echo "Le ".(get_class($m))." ne brûle pas "  ;
    }

    if ($m->dechirer()){
        echo "Le ".(get_class($m))." se dechire <br>" ;
    }else{
        echo "Le ".(get_class($m))." ne se dechire pas" ;
    }

// $m->enflamme(); 
// $m->dechire();
}

?>