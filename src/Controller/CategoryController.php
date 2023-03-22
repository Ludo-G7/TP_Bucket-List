<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\WishType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    /*
    #[Route('/category/create', name: 'category_create')]
    public function categoryCreate(Request $request, EntityManagerInterface $entityManager): Response
    {
        $category = new Category();
        $categoryForm = $this->createForm(WishType::class, $category);

        $categoryForm->handleRequest($request);

        if($categoryForm->isSubmitted() && $categoryForm->isValid())
        {
            $entityManager->persist($category);
            $entityManager->flush();

            $this->addFlash('success', 'Category valid !');
            return $this->redirectToRoute('wish_list');
        }
        return $this->render('category/create.html.twig', [
            'categoryForm' => $categoryForm
        ]);
    }
    */
}
