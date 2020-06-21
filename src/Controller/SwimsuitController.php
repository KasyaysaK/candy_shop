<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class SwimsuitController extends AbstractController
{

	/**
	* @return Response
	*/
	public function index(): Response
		{
			return $this->render('pages/swimsuit.html.twig', [
				'current_menu' => 'swimsuits'
			]);
		}
}























































