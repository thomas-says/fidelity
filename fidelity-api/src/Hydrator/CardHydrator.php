<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 30/11/2018
 * Time: 14:14
 */
namespace App\Hydrator;

use App\Entity\Card;


class CardHydrator
{

   /**
     * @param Card $card
     * @return array
     */
    public function extract(Card $card) : array
    {
        return [

            "email" => $card->getEmail(),
            "number" => $card->getNumber()

        ];
    }

    /**
     * @param Card $card
     * @param array $values
     * @return Card
     */

    public function hydrate(Card $card, array $values = []) : Card
    {
        foreach ($values as $key => $value)
        {
            $setterName = "set" . ucfirst($key);
            if(method_exists($card, $setterName))
            {
                $card->$setterName($value);
            }
        }

        return $card;
    }
}