<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SwimsuitController extends AbstractController
{

	/**
	 * @Route("/maillots-de-bain", name="swimsuit.index")
	 * @return Response
	 */
	public function index(): Response
		{
			return $this->render('swimsuit/index.html.twig', [
				'current_menu' => 'swimsuits'
			]);
		}
}























































