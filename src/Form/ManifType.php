<?php

namespace App\Form;

use App\Entity\Manif;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ManifType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('genre')
            ->add('titre')
            ->add('affiche')
            ->add('descript')
            ->add('casting')
            ->add('prix')
            ->add('date')
            ->add('horaire')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Manif::class,
        ]);
    }
}
