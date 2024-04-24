<?php

include_once 'conec.php';

class peliculas extends Database{

    function obtenerpeli(){

    $query  = $this->connect()->query('SELECT * FROM video');

    return $query;
}

}


