<?php

namespace App\Form;

use App\entity\DocumentoTipo;
use Symfony\Component\Form\Form;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Doctrine\ORM\EntityRepository;

class AddTipoFieldSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SUBMIT => 'preSubmit',
        );
    }

    /**
     * Cuando el usuario llene los datos del formulario y haga el envío del mismo,
     * este método será ejecutado.
     */
    public function preSubmit(FormEvent $event)
    {
        $data = $event->getData();
        //data es un arreglo con los valores establecidos por el usuario en el form.

        //como $data contiene el pais seleccionado por el usuario al enviar el formulario,
        // usamos el valor de la posicion $data['country'] para filtrar el sql de los estados
        $this->addField($event->getForm(), $data['grupo']);
    }

    protected function addField(Form $form, $grupo)
    {
        // actualizamos el campo state, pasandole el country a la opción
        // query_builder, para que el dql tome en cuenta el pais
        // y filtre la consulta por su valor.
        
        $form->add('documentoTipo', EntityType::class, array(
            'class' => 'App\Entity\DocumentoTipo',
            'query_builder' => function(EntityRepository $er) use ($grupo){
                return $er->createQueryBuilder('tipo')
                    ->where('tipo.grupo = :grupo')
                    ->setParameter('grupo', $grupo);
            },
            'choice_label' =>'nombre',
        ));
        
    }
}