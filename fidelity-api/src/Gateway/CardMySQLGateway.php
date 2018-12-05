<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 30/11/2018
 * Time: 14:05
 */
namespace  App\Gateway;


use App\Entity\Card;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use PhpParser\Node\Expr\Array_;


class CardMySQLGateway implements CardGatewayInterface{
protected $EntityManager;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->EntityManager = $manager;
    }

    public function persist(Card $card): Card
    {
         $this->getEntityManager()->persist($card);
        $this->getEntityManager()->flush();

        return $card;


    }

    public function findOneById(string $id): Card
    {
        // TODO: Implement findOneById() method.

        $repository = $this->getEntityManager()->getRepository(Card::class);


        return $repository->find($id);



    }

    public function findAll(): Array
    {
        $repository = $this->getEntityManager()->getRepository(Card::class);
        return $repository->findAll();
    }

    /**
     * @return EntityManager
     */
    public function getEntityManager(): EntityManager
    {
        return $this->EntityManager;
    }
}
