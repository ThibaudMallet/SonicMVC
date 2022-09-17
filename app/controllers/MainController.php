<?php

namespace Sonic\Controllers;

use \Sonic\Models\Character;
use \Sonic\Models\Type;

class MainController
{
    protected function show($viewName, $viewData = [])
    {
        // Permet de récupérer l'accès à l'objet $router
        global $router;
        $absoluteURL = $_SERVER['BASE_URI'];

        // On charge le template dynamiquement selon contenu de l'URL
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
    }

    public function home()
    {
        $character = new Character();
        $characters = $character->findAll();
        $this->show('home', $characters);
    }
    public function creator()
    {
        $this->show('creator');
    }
}