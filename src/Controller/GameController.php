<?php


namespace App\Controller;

use App\Model\GameManager;

class GameController extends AbstractController
{

    public function index()
    {
        $mechants=[];
        $oeufs=[];
        $itemManager = new GameManager();
        for ($i = 0; $i < 40; $i++) {
            $oeuf = $itemManager->oeufhasard();
            $oeufs[] = $oeuf;
        }
        for ($i = 0; $i < 15; $i++) {
            $mechant = $itemManager->mechanthasard();
            $mechants[] = $mechant;
        }
            $items=array_merge($oeufs, $mechants);
            shuffle($items);
        return $this->twig->render('Game/Levelone.html.twig', ['items' => $items]);
    }
}
