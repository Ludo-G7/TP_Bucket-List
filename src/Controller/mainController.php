<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class mainController extends AbstractController
{
    #[Route("/", name:"main_home")]
    public function home(){
        return $this->render("main/home.html.twig");
    }

    #[Route("/test", name:"main_test")]
    public function test(){
        return $this->render("main/test.html.twig");
    }

    #[Route("/Aboutus",name:"main_about" )]
    public function AboutUs(){
        $lorem = "Lorem ipsum dolor sit amet. Id tempore molestiae sed iusto perspiciatis
                eum rerum quasi nam voluptas sequi. Ab repellendus ipsum et consequatur
                consequuntur ea sunt voluptatum vel vitae iste et alias ipsa et voluptatem
                maiores est alias autem! 
                
                Id iusto nihil aut harum doloribus eum officia iste nam dolor omnis.
                Ut voluptas corporis cum quia totam eum molestias nihil eos blanditiis
                dolor aut deleniti veniam.

                Ab aliquid voluptate hic eius sequi rem libero facere ea expedita
                nisi et delectus sunt. Et repudiandae voluptatem est vero sequi eos
                dolorem rerum in ipsa consequuntur vel quaerat suscipit est culpa
                repellendus.";
        return $this->render("main/aboutus.html.twig", [
            'lorem'=> $lorem
        ]);
    }
}