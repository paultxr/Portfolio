<?php

namespace App\Controller\Admin;

use App\Entity\ContactDetails;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ContactDetailsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ContactDetails::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
