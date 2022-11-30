<?php

namespace App\Controller\Admin;
use App\Entity\Salle;
use App\Entity\Manif;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;


class ManifCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Manif::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnindex(),
            TextField::new('titre'),
            ImageField::new('affiche')->setBasePath('uploads/')->setUploadDir('public/uploads/'),
            TextField::new('genre'),
            TextField::new('descript'),
            TextField::new('casting'),
            TextField::new('prix'),
            TextField::new('date'),
            TextField::new('horaire'),
            AssociationField::new('Salle', 'ManifLieux')
        ];
    }
    
}
