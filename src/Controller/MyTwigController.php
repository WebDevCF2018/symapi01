<?php
/**
 * Created by PhpStorm.
 * User: webform
 * Date: 17/09/2018
 * Time: 15:29
 */

namespace App\Controller;

// appel de la classe abstraite gèrant toutes les classes chargées depuis vendor ayant un lien avec la gestion des contrôleurs
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

// on étend notre classe de la classe abstraite, ce qui permet à notre système (symfony ainsi que les IDE le comprenant) de trouver toutes les méthodes utiles à la gestion d'un contrôleur
class MyTwigController extends AbstractController
{

    // méthode appelé avec 127.0.0.1:8000/twig (voir config/routes.yaml)
    function FirstTwigAction(){
        // utilisation de la méthode render de twig (cherche automatiquement dans le dossier templates)
        return $this->render("firsttwig.html.twig");
    }
}