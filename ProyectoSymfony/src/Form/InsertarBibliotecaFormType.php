<?php

namespace App\Form;

use App\Entity\Biblioteca;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InsertarBibliotecaFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nombre')
            ->add('Direccion')
            ->add('Ciudad')
            ->add('HorarioApertura', null, ['widget' => 'single_text',])
            ->add('HorarioCierre', null, ['widget' => 'single_text',])
            ->add('FechaFundacion', null, ['widget' => 'single_text', ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Biblioteca::class,
        ]);
    }
}
