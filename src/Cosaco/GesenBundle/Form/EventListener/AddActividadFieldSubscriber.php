<?php

namespace Cosaco\GesenBundle\Form\EventListener;

use Doctrine\Common\Util\Debug;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormFactoryInterface;

class AddActividadFieldSubscriber implements EventSubscriberInterface
{
    private $factory;
    
    public function __construct(FormFactoryInterface $factory) {
        $this->factory=$factory;
    }
    
    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SET_DATA    => 'preSetData',
            FormEvents::PRE_BIND        => 'preBind'
        );
    }  
    
    private function addActividad($form, $tipo_actividad)
    {
        if($tipo_actividad===null || $tipo_actividad==='Curricular')
        {
            $form->add($this->factory->createNamed('asignatura', 'entity', null, array(
                'class' => 'CosacoGesenBundle:Asignatura',
                'empty_value' => 'Asignatura',
                'auto_initialize' => false
            )));
            
            $form->add($this->factory->createNamed('curso', 'entity', null, array(
                'class' => 'CosacoGesenBundle:Curso',
                'empty_value' => 'Curso',
                'auto_initialize' => false
            )));
            
        }
        
        if($tipo_actividad==='Taller')
        {
            $form->add($this->factory->createNamed('taller', 'entity', null, array(
                'class' => 'CosacoGesenBundle:Taller',
                'empty_value' => 'Taller',
                'auto_initialize' => false
            )));
        }
    }
    
    public function preSetData(FormEvent $event){
        $data = $event->getData();
        $form = $event->getForm();
        
        if(null === $data){
            return;
        }
        
        $tipo_actividad=$data->getTipoReserva();
        
        $this->addActividad($form, $tipo_actividad);
       
        
    }
    
    public function preBind(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();
        
        if(null === $data) {
            return;
        }
        
        $tipo_actividad=$data['tipoReserva'];
        
        $this->addActividad($form, $tipo_actividad);
       
    }
}
