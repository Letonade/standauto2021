<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class webAppController extends AbstractController
{

	/**
	* @Route("/")
	*/
    public function Index(): Response
    {
        $number = random_int(0, 100);

        //return new Response('<html><body>Lucky number: '.$number.'</body></html>');
		return $this->render('WebApp/home.html.twig', [
			'number' => $number,
		]);
    }
}