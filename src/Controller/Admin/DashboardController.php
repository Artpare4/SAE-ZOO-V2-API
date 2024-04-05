<?php

namespace App\Controller\Admin;

use App\Entity\Animal;
use App\Entity\Billet;
use App\Entity\DateEvent;
use App\Entity\Espece;
use App\Entity\Event;
use App\Entity\FamilleAnimal;
use App\Entity\Habitat;
use App\Entity\User;
use App\Entity\ZoneParc;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig');

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('<img src="image/LogoZoo.png" alt="icone acceuil">');
    }

    public function configureAssets(): Assets
    {
        return parent::configureAssets()
            ->addCssFile('CSS/style_dashboard.css');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToUrl('Home', 'fa fa-home', 'http://127.0.0.1:5173/');
        yield MenuItem::linkToUrl('Api platform', 'fas fa-spider', '/api');

        yield MenuItem::section('Animal');
        yield MenuItem::linkToCrud('Animaux', 'fas fa-fish', Animal::class);
        yield MenuItem::linkToCrud('Espèce', 'fa-solid fa-worm', Espece::class);
        yield MenuItem::linkToCrud('Famille d\'animaux', 'fas fa-hippo', FamilleAnimal::class);
        yield MenuItem::linkToCrud('Habitat', 'fas fa-mountain-sun', Habitat::class);

        yield MenuItem::section('Evènements');
        yield MenuItem::linkToCrud('Date Evenement', 'fas fa-calendar-days', DateEvent::class);
        yield MenuItem::linkToCrud('Evenement', 'fas fa-users', Event::class);


        yield MenuItem::section('Parc');
        yield MenuItem::linkToCrud('Zone Parc', 'fas fa-tree', ZoneParc::class);

        yield MenuItem::section('Utilisateurs');
        yield MenuItem::linkToCrud('Billet', 'fa-solid fa-ticket', Billet::class);
        yield MenuItem::linkToCrud('User', 'fa-solid fa-user', User::class);
    }
}
