<?php

namespace App\Controller;

use App\Model\GameManager;

class GameController extends AbstractController
{

    public function index()
    {
        $mechants = [];
        $oeufs = [];
        $itemManager = new GameManager();
        for ($i = 0; $i < 35; $i++) {
            $oeuf = $itemManager->oeufhasard();
            $oeufs[] = $oeuf;
        }
        for ($i = 0; $i < 20; $i++) {
            $mechant = $itemManager->mechanthasard();
            $mechants[] = $mechant;
        }
        $items = array_merge($oeufs, $mechants);
        shuffle($items);
        return $this->twig->render('Game/Levelone.html.twig', ['items' => $items]);
    }
    public function success1()
    {
        return $this->twig->render('Game/Success1.html.twig');
    }

    public function success2()
    {
        return $this->twig->render('Game/Success2.html.twig');
    }

    public function success3()
    {
        return $this->twig->render('Game/Success3.html.twig');
    }

    public function leveltwo()
    {
        $mechants = [];
        $oeufs = [];
        $itemManager = new GameManager();
        for ($i = 0; $i < 65; $i++) {
            $oeuf = $itemManager->oeufhasard();
            $oeufs[] = $oeuf;
        }
        for ($i = 0; $i < 30; $i++) {
            $mechant = $itemManager->mechanthasard();
            $mechants[] = $mechant;
        }
        $items = array_merge($oeufs, $mechants);
        shuffle($items);
        return $this->twig->render('Game/Leveltwo.html.twig', ['items' => $items]);
    }

    public function gameOver()
    {
        $mechants = [];
        $oeufs = [];
        $itemManager = new GameManager();
        for ($i = 0; $i < 65; $i++) {
            $oeuf = $itemManager->oeufhasard();
            $oeufs[] = $oeuf;
        }
        for ($i = 0; $i < 30; $i++) {
            $mechant = $itemManager->mechanthasard();
            $mechants[] = $mechant;
        }
        $items = array_merge($oeufs, $mechants);
        shuffle($items);
        return $this->twig->render('Game/gameover.html.twig', ['items' => $items]);
    }
}
