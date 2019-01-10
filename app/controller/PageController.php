<?php

class PageController extends Controller {

    public function index(){
        $template = $this->twig->loadTemplate('/Page/index.html.twig');
        echo $template->render(array());
    }

    public function steeve(){//changer nom de fonction
        $template = $this->twig->loadTemplate('/Page/steeve.html.twig');// nom de page a changer
        echo $template->render(array());
    }

    public function cc(){
        $template = $this->twig->loadTemplate('/Page/cc.html.twig');
        echo $template->render(array());
    }


    public function sam(){
        $template = $this->twig->loadTemplate('/Page/sam.html.twig');
        echo $template->render(array());
    }



    public function ion(){
        $template = $this->twig->loadTemplate('/Page/ion.html.twig');
        echo $template->render(array());
    }


    public function frah(){
        $template = $this->twig->loadTemplate('/Page/frah.html.twig');
        echo $template->render(array());
    }


    public function mandris(){
        $template = $this->twig->loadTemplate('/Page/mandris.html.twig');
        echo $template->render(array());
    }

    public function goz(){
        $template = $this->twig->loadTemplate('/Page/goz.html.twig');
        echo $template->render(array());
    }
    public function bio(){
        $template = $this->twig->loadTemplate('/Page/bio.html.twig');
        echo $template->render(array());
    }


    public function discographie(){
        $template = $this->twig->loadTemplate('/Page/discographie.html.twig');
        echo $template->render(array());
    }

    public function photos(){
        $template = $this->twig->loadTemplate('/Page/photos.html.twig');
        echo $template->render(array());
    }


    public function songs(){
        $template = $this->twig->loadTemplate('/Page/songs.html.twig');
        echo $template->render(array());
    }

    public function videos(){
        $template = $this->twig->loadTemplate('/Page/videos.html.twig');
        echo $template->render(array());
    }



    public function helenBis(){ // fonction url slah///
        $id = $this->route['params']['nom'];

        $template = $this->twig->loadTemplate('/Page/helenBis.html.twig');
        echo $template->render(array('id' => $id)); // renvoi id apres le /

    }


}