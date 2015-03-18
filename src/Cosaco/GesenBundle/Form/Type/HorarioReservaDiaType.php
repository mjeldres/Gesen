<?php

namespace Cosaco\GesenBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HorarioReservaDiaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('actividadReserva', 'textarea', array(
                'required' => true
            ))
            ->add('observacionReserva')    
        //    ->add('chequeoReserva')
            ->add('horas', 'collection', array(
                'label'         => false,
                'type'          => new HorarioReservaHoraType(),
                'by_reference'  => false,
                'allow_add'     => true,
                'allow_delete'  => true,
                'options'       => array('label' => false)
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cosaco\GesenBundle\Entity\ReservaDia'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cosaco_gesenbundle_horarioreservadia';
    }
}
