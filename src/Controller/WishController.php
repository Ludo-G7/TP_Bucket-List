<?php

namespace App\Controller;

use App\Entity\Wish;
use App\Repository\WishRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route("/wish", name:"wish_")]
class WishController extends AbstractController
{
    #[Route("/list", name:"list")]
    public function list(WishRepository $wishRepository):Response
    {
        $idees = $wishRepository->findAll();
        //$idees = $wishRepository->findBy(['isPublished' => false], ['dateCreated'=> 'DESC']);
        return $this->render('wish/list.html.twig', [
                'idees'=>$idees
    ]);

    }

    #[Route("/details/{id}", name:"details")]
    public function idees(int $id, WishRepository $wishRepository):Response
    {
        $details = $wishRepository->find($id);

        return $this->render('wish/details.html.twig',
        [
            'wish'=>$details
        ]);
    }

    #[Route('/detailsId', name:'detailsId')]
    public function details(EntityManagerInterface $entityManager)
    {
        $details = new Wish();
        $details -> setTitle("Avoir mon titre");
        $details -> setDescription("Avoir le titre D2WM");
        $details -> setAuthor('Ludo');
        $details -> setIsPublished(0);
        $details -> setDateCreated(new \DateTime());

        $entityManager->persist($details);
        $entityManager -> flush();
        dump($details);

        $details = new Wish();
        $details -> setTitle("Acheter une voiture de collection");
        $details -> setDescription("Acheter une voiture de collection");
        $details -> setAuthor('Ludo');
        $details -> setIsPublished(0);
        $details -> setDateCreated(new \DateTime('+1h'));

        $entityManager->persist($details);
        $entityManager -> flush();
        dump($details);

        return $this->render('wish/details.html.twig');
    }

}