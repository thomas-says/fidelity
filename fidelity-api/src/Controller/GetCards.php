<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 30/11/2018
 * Time: 15:05
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Hydrator\CardHydrator;
use App\Manager\CardManager;
use App\Entity\Card;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Routing\Annotation\Route;

class GetCards extends AbstractController
{

    /**
     * Get fidelity card by id (email)
     * @Route(path="/cards", methods={"GET"}, name="get_cards")
     * @param Request $request
     * @param CardManager $CardManager
     * @param CardHydrator $hydrator
     * @return JsonResponse
     */
    public function __invoke(Request $request,CardManager $CardManager, CardHydrator $hydrator)
    {
        $data = $CardManager->findAll();
        $data = array_map([$hydrator, 'extract'], $data);

        return new JsonResponse($data);
    }

}