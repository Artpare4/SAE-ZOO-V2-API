<?php

namespace App\Controller\Admin;

use App\Entity\Animal;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType;

class AnimalCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Animal::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('nomAnimal', 'Nom'),
            NumberField::new('taille', 'Taille'),
            NumberField::new('poids', 'Poids'),
            DateField::new('dateNaissance', 'Date de naissance'),
            DateField::new('dateMort', 'Date de la mort'),
            TextareaField::new('caracteristique', 'caractéristiques')
                ->stripTags(),
            AssociationField::new('familleAnimal', 'Famille d\'animaux')
                ->setFormTypeOption('choice_label', 'nomFamilleAnimal')
                ->formatValue(function ($entity) {
                    return isset($entity) ? $entity->getNomFamilleAnimal() : 'Pas de famille';
                }),
            AssociationField::new('events')
                ->setFormTypeOption('choice_label', 'event.nomEvent')
                ->setFormTypeOption('by_reference', false),
            ImageField::new('imgAnimal')
                ->setBasePath('image/animaux')
                ->setUploadDir('public/image/animaux')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', false)
                ->setFormTypeOption('upload_delete', function ($file) {}),
        ];
    }
}
