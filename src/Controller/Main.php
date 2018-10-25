<?php

namespace App\Controller;

//use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Main extends AbstractController
{
    /**
     * @Route("/")
     */
    public function main()
    {
        $number = random_int(0, 100);

        return $this->render('base.html.twig', [
            'dobra_nazwa' => "MasterLangg",
        ]);
    }
}