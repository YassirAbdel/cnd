<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CndController extends AbstractController
{
    /**
     * @Route("/cnd", name="cnd")
     */
    public function index()
    {
        return $this->render('cnd/index.html.twig', [
            'controller_name' => 'CndController',
        ]);
    }
}
