<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 30/11/2018
 * Time: 13:43
 */
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Card
 * @package App\Entity
 * @ORM\Entity
 * @ORM\Table(name="Card")
 */
class Card
{
    /**
     *
     *Client Email, used as identifier
     * @ORM\Id
     * @var string
     * @ORM\Column(type="string")
     *
     *
     */
    protected $email;

/**
 * Number of points
 *
 * @var integer
 * @ORM\Column(type="integer")
 *
 *
 */
    protected $number;

    /**
     * Card constructor.
     * @param string $email
     * @param number $number
     */



    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param number $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }




}