<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 30/11/2018
 * Time: 14:59
 */
namespace App\Controller;
use App\Entity\Card;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Hydrator\CardHydrator;
use App\Manager\CardManager;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class Card
 *
 * @package App\Controller
 */
class PersistCard extends AbstractController
{


    /**
     * @Route(path="/card", methods={"POST"},name="persist_card");
     * @param Request $request
     * * @param CardManager $CardManager
     * @param CardHydrator $CardHydrator
     * @return JsonResponse
     */

    public function _invoke(Request $request, CardManager $CardManager, CardHydrator $CardHydrator)
    {


        $card = $CardHydrator->hydrate(new Card(),$request->request->all());

       /* if ($card->getEmail() !== null) {
            $card= $CardManager->findOneById($card->getEmail());
            $card = $CardHydrator->hydrate($card, $request->request->all());
        }*/




        $CardManager->persist($card);


        return new JsonResponse($CardHydrator->extract($card));

    }




}