<?php

namespace App\Controller\Admin;

use App\Entity\Event;
use App\Entity\ZoneParc;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class EventCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Event::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('nomEvent', 'Nom de l\'événement'),
            IntegerField::new('nbPlaces', 'Nombre de places'),
            TextEditorField::new('description', 'Description'),
            AssociationField::new('animaux')
                ->setFormTypeOption('choice_label', 'animal.nomAnimal')
                ->setFormTypeOption('by_reference', false),
            ImageField::new('imgEvent', 'Image')
                ->setUploadDir('public/image/events')
                ->setUploadedFileNamePattern('./image/events/[slug].[extension]'),
            AssociationField::new('datesEvent', 'Dates')
                ->setFormTypeOption('choice_label', 'dateEvent')
                ->setFormTypeOption('by_reference', false),
            AssociationField::new('zonesParc')
                ->setFormTypeOption('choice_label', 'zoneParc.libZone')
                ->setFormTypeOption('by_reference', false),
        ];
    }

}
