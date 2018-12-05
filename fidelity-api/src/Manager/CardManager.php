<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 30/11/2018
 * Time: 14:07
 */

namespace App\Manager;

use App\Gateway\CardGatewayInterface;
use App\Entity\Card;
use PhpParser\Node\Expr\Array_;

/**
 * Class CardManager
 *
 * @package App\Manager
 */

class CardManager
{

    protected  $gateway;


    public function __construct(CardGatewayInterface $gateway)
    {
        $this->gateway = $gateway;
    }

    public function findOneById(String $id): Card
    {
        return $this->getGateway()->findOneById($id);
    }

    public function persist(Card $card): Card
    {
        return $this->getGateway()->persist($card);
    }


    public function findAll(): Array
    {
        return $this->getGateway()->findAll();
    }
    /**
     * @return CardGatewayInterface
     */
    public function getGateway(): CardGatewayInterface
    {
        return $this->gateway;
    }
}