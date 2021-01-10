<?php

namespace App\Controller\Admin;

use App\Entity\Project;
use App\Form\PictureType;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProjectCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Project::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title'),
            TextEditorField::new('description'),
            TextEditorField::new('github'),
            TextEditorField::new('onlineUrl'),
            AssociationField::new('techno'),
            TextEditorField::new('background'),
            DateTimeField::new('createdAt'),
            CollectionField::new('pictures')
            ->setEntryType(PictureType::class),
        ];
    }
}
