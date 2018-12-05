<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 30/11/2018
 * Time: 14:03
 */

namespace App\Gateway;
use App\Entity\Card;
interface CardGatewayInterface
{
    public function persist(Card $card): Card;

    public function findOneById(string $id): Card;

    public function findAll() : Array;
}