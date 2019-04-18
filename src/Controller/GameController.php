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
        for ($i = 0; $i < 2; $i++) {
            $oeuf = $itemManager->oeufhasard();
            $oeufs[] = $oeuf;
        }
        for ($i = 0; $i < 2; $i++) {
            $mechant = $itemManager->mechanthasard();
            $mechants[] = $mechant;
        }
        return $this->twig->render('Game/index.html.twig', ['mechants' => $mechants, 'oeufs' => $oeufs]);
    }
}