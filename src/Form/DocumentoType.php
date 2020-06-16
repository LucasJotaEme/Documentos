<?php

namespace App\Form;

use App\Entity\Documento;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DocumentoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numero', TextType::class)
            ->add('anio')
            ->add('fechaPublicacion')
            ->add('fechaCaducidad')
            ->add('numeroVersion')
            ->add('palabrasClaves',TextType::class)
            ->add('titulo')
            ->add('descripcion')
            ->add('path',FileType::class,['required'=>false,'multiple'=>true])
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
