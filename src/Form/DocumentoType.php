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
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use App\Entity\DocumentoTipo;
use Doctrine\ORM\EntityRepository;

class DocumentoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('documentoTipo', EntityType::class, [
                'class' => DocumentoTipo::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('dt')
                        ->add('where', "dt.estado = 'Alta'");
                    },
                'choice_label' => 'nombre'])
            
            ->add('numero', TextType::class)
            ->add('anio')
            ->add('fechaPublicacion')
            ->add('agregarFecha',CheckBoxType::class)
            ->add('fechaCaducidad')
            ->add('numeroVersion')
            ->add('palabraClave', TextType::class)
            ->add('titulo')
            ->add('descripcion')
            ->add('path',FileType::class,['required'=>true,'multiple'=>false, 'data_class' => null])
            ->add('perfil', ChoiceType::class, [
                'choices'  => [
                    'Público' => 'Público',
                    'Restringido' => 'Restringido',
                    'Confidencial' => 'Confidencial',
                ],
            ])
            ->add('Grabar',SubmitType::class)
        ;
        
        }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Documento::class,
        ]);
    }
}
