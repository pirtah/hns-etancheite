<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    #[Route('/', name:'app_default_home', methods:['GET'])]
    public function home(): Response
    {
        return $this->render('default/home.html.twig', [
        
        ]);
    }
}
