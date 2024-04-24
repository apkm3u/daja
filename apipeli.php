<?php

include_once 'Peliculas.php';

class apiplei {

    function obtener_todos(){
        $peliculas = new peliculas();
        $pelicula = array() ;
        $pelicula['items'] = array() ;

        $resp = $peliculas->obtenerpeli() ;

        if ($resp->rowCount()){
            while($row = $resp->fetch(PDO::FETCH_ASSOC)){ 
                $lista = array(
                    'id'=> $row['id'],
                    'cate_id'=>$row ['cate_id'],
                    'tipo_id' => $row ['tipo_id'],
                    'nivel_id'=> $row['nivel_id'],
                    'video_titulo' => $row['video_titulo'],
                    'video_desc'=> $row['video_desc'],
                    'video_fech' => $row['video_fech'],
                    'video_img'=> $row['video_img'],
                    'video_url'=> $row['video_url'],
                    'prefe_acti'=> $row['prefe_acti'],
                    'fecha_creacion'=> $row['fecha_creacion'],
                    'fecha_actualiza'=> $row['fecha_actualiza']
                ) ;
                array_push($pelicula['items'],$lista) ;  
            }
            header('Content-Type: application/json'); 
            echo json_encode($pelicula); 
            
        } else {
            header('Content-Type: application/json'); 
            echo json_encode(array('mensaje' => 'No hay películas')); 
        }
    }
}

?>
