<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 07/03/18
 * Time: 18:20
 * PHP version 7
 */

namespace App\Model;

use GuzzleHttp;
/**
 *
 */
class ItemManager extends AbstractManager
{
    /**
     *
     */


    /**
     *  Initializes this class.
     */
    /*public function __construct()
    {
        parent::__construct(self::TABLE);
    }*/


    public function vasChercherLesDonneesDelApi()
    {
        $client = new GuzzleHttp\Client([
                'base_uri' => 'http://easteregg.wildcodeschool.fr',
            ]
        );

        $response = $client->request('GET', '/api/eggs');


        $body = $response->getBody();


        $truc=$body->getContents();
        $truc= GuzzleHttp\json_decode($truc,true);
        return $truc;


    }


}