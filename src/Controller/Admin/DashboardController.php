<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Techno;
use App\Entity\Contact;
use App\Entity\Picture;
use App\Entity\Project;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Portfolio');
    }


    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToCrud('Project', 'fas fa-record-vinyl', Project::class);
        yield MenuItem::linkToCrud('User', 'fas fa-user', User::class);
        yield MenuItem::linkToCrud('Techno', 'fas fa-search', Techno::class);
        yield MenuItem::linkToCrud('Contact', 'fas fa-contact', Contact::class);
    }
}
