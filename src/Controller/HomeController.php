<?php

namespace App\Controller;

use App\Entity\Link;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home_index')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $links = $entityManager->getRepository(Link::class)->findAll();
        return $this->render('Page/Home/index.html.twig', [
            'links' => $links,
        ]);
    }
}