<?php

namespace App\Controller\Admin;

use App\Entity\Espece;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class EspeceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Espece::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('libEspece', 'Nom de l\'espece'),
        ];
    }

}
