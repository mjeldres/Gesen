<?php

namespace Cosaco\GesenBundle\Form;

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
            ->add('actividadReserva')
            ->add('observacionReserva')
       //     ->add('chequeoReserva')
          //  ->add('reserva')
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
