<?php

class Router {
  

    public static function analyse($request){
        $result = array(
            'controller'    => 'Error',
            'action'        => 'error404',
            'params'        => array()
        );

        if($request === '' || $request === '/'){ // Route vers la page d'accueil
            $result['controller']   = 'Page';//dossier
            $result['action']       = 'index';//fichier
            
        } else if($request === 'steeve'){
            $result['controller']   = 'Page';
            $result['action']       = 'steeve';

        }else if($request === 'cc'){
            $result['controller'] = 'Page';//dossier
            $result['action'] = 'cc';}// fichier

        else if($request === 'sam'){
            $result['controller'] = 'Page';//dossier
            $result['action'] = 'sam';}// fichier
    
        else if($request === 'ion'){
            $result['controller'] = 'Page';//dossier
            $result['action'] = 'ion';}// fichier
        

        else if($request === 'frah'){
            $result['controller'] = 'Page';//dossier
            $result['action'] = 'frah';}// fichier
            
        else if($request === 'mandris'){
            $result['controller'] = 'Page';//dossier
            $result['action'] = 'mandris';}// fichier
                
        else if($request === 'goz'){
            $result['controller'] = 'Page';//dossier
             $result['action'] = 'goz';}// fichier

        else if($request === 'bio'){
            $result['controller'] = 'Page';//dossier
            $result['action'] = 'bio';}// fichier


        else if($request === 'discographie'){
            $result['controller'] = 'Page';//dossier
            $result['action'] = 'discographie';}// fichier
    
        else if($request === 'photos'){
            $result['controller'] = 'Page';//dossier
            $result['action'] = 'photos';}// fichier
    

        else if($request === 'songs'){
            $result['controller'] = 'Page';//dossier
            $result['action'] = 'songs';}// fichier
    
        else if($request === 'videos'){
            $result['controller'] = 'Page';//dossier
            $result['action'] = 'videos';}// fichier
    
           
        else if($request === 'helen'){
            $result['controller'] = 'Page';//dossier
            $result['action'] = 'helen';}// fichier
       


 else {
            $parts = explode('/', $request);
            //*request ='helen' =>$part = [0] ='helen' et $parts[1] = 1


            if($parts[0] === 'helen' && count($parts) == 2){
                $result['controller'] = 'Page';
                $result['action'] = 'helenBis';
                $result['params'] = array(
                    'nom' => $parts[1]
                );
            }


            //if($parts[0] == 'login' && (count($parts) == 1 || $parts[1] == '')){ // Route vers la page de connexion
            //    $result['controller']       = 'User';
            //    $result['action']           = 'login';
            //}
        }

        return $result;
    }
    
}