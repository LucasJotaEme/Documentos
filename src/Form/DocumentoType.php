<?php

namespace App\Form;

use App\Entity\Documento;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DocumentoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numero')
            ->add('anio')
            ->add('fechaPublicacion')
            ->add('fechaCaducidad')
            ->add('numeroVersion')
            ->add('palabrasClaves')
            ->add('titulo')
            ->add('descripcion')
            ->add('Aceptar',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Documento::class,
        ]);
    }
}
