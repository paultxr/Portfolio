<?php

namespace App\Controller;

use App\Entity\Techno;
use App\Entity\Project;
use App\Repository\TechnoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProjectController extends AbstractController
{
    /**
     * @Route("/", name="project")
     */
    public function index(Request $request, EntityManagerInterface $manager, TechnoRepository $techno): Response
    {
        
        $technos = $this->getDoctrine()
        ->getRepository(Techno::class)
        ->findAll();

        $projects = $this->getDoctrine()
        ->getRepository(Project::class)
        ->findAll();
        return $this->render('project/index.html.twig', [
            'projects' => $projects,
            'technos' => $technos,
        ]);
    }

    /**
     * @Route("/{id}", name="techno_show")
     */
    public function showByTechno(Techno $techno): Response
    {
        $projects = $techno->getProjects();

        return $this->render('project/showByTechno.html.twig', [
            'controller_name' => 'TechnoController',
            'techno' => $techno,
            'projects' => $projects

        ]);
    }
}
