<?php

namespace Cosaco\GesenBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HorarioReservaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder
            ->add('tipoReserva', 'choice', array(
                'choices' => array('Curricular'=>'Curricular', 'Taller'=>'Taller', 'Otro'=>'Otro')
            ))
            ->add('asignatura', 'entity', array(
                'class' => 'CosacoGesenBundle:Asignatura',
                'required'=>true,
                'empty_value'=>'Seleccione'
            ))
            ->add('taller')
            ->add('curso')
            ->add('dias', 'collection', array(
                'type' => new HorarioReservaDiaType(),
                'by_reference' => false,
                'allow_add' => true,
                'allow_delete' => true,

                ))
        ;      
        
        
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cosaco\GesenBundle\Entity\Reserva'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cosaco_gesenbundle_horarioreserva';
    }
}
