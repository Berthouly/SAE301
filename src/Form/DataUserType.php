<?php

namespace App\Form;

use App\Entity\DataUser;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DataUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('adresse')
            ->add('numero')
            ->add('numero_carte')
            ->add('titulaire_carte')
            ->add('crypt')
            ->add('paypal_user')
           /* ->add('user')*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DataUser::class,
        ]);
    }
}
