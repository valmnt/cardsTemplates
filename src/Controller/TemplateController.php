<?php

namespace App\Controller;

use App\Repository\CardTemplateRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TemplateController extends AbstractController
{
    /**
     * @Route("/template", name="template")
     */
    public function index(CardTemplateRepository $cardTemplateRepository)
    {
        $cardsTemplates = $cardTemplateRepository->findAll();

        return $this->render('template/index.html.twig', [
            'cards' => $cardsTemplates,
        ]);
    }
}
