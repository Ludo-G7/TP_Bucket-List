<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route("/wish", name:"wish_")]
class WishController extends AbstractController
{
    #[Route("/list", name:"list")]
    public function list():Response
    {
        return $this->render('wish/list.html.twig');
    }

    #[Route("/idees/{id}", name:"idees")]
    public function idees(int $id):Response
    {
        return $this->render('wish/idees.html.twig');
    }
}