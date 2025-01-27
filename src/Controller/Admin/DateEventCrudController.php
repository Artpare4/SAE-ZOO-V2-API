<?php

namespace App\Controller\Admin;

use App\Entity\DateEvent;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;

class DateEventCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return DateEvent::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            DateField::new('dateEvent', 'Date de l\'évènement'),
        ];
    }
}
