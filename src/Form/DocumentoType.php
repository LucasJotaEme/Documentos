<?php

namespace App\Form;

use App\Entity\Documento;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextAreaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use App\Entity\DocumentoTipo;

class DocumentoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('documentoTipo', EntityType::class, [
                'class' => DocumentoTipo::class,
                'choice_label' => 'nombre',])
            ->add('numero', TextType::class)
            ->add('anio')
            ->add('fechaPublicacion')
            ->add('fechaCaducidad')
            ->add('numeroVersion')
            //->add('palabrasClaves')
            ->add('titulo')
            ->add('descripcion', TextType::class)
            ->add('path',FileType::class,['required'=>true,'multiple'=>false, 'data_class' => null])
            ->add('perfil', ChoiceType::class, [
                'choices'  => [
                    'Usuario' => null,
                    'Editor' => true,
                    'Administrador' => false,
                ],
            ])
            ->add('publico')
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
