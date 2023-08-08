<?php

declare(strict_types=1);

namespace App\Controller\Panel\Globals;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    #[Route('/', name: 'app_panel_globals_login')]
    public function index(): Response
    {
        $name = "Abmael";
        $sobrenome = "Ferreira";
        $controller_name = 'LoginController';
        return $this->render(
            'panel/globals/login/index.html.twig',
            compact(
                'name',
                'sobrenome',
                'controller_name'
            )
        );
    }
    #[Route('/product/{slug}', name: 'slug')]
    public function product($slug): Response
    {
        return $this->render('panel/globals/login/single.html.twig', compact('slug'));
    }
}
