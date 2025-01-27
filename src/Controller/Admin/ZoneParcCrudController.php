<?php

namespace App\Controller\Admin;

use App\Entity\ZoneParc;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType;

class ZoneParcCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ZoneParc::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('libZone', 'Nom de la zone'),
            ImageField::new('imgZone', 'Image')
                ->setBasePath('image/zone_parc')
                ->setUploadDir('public/image/zone_parc')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', false)
                ->setFormTypeOption('upload_delete', function ($file) {}),
            ];
    }
}
