<?php

namespace Cosaco\GesenBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HorarioReservaHoraType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fechaReserva')
            ->add('dependencia')
            ->add('horario')
            ->add('reservaDia')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cosaco\GesenBundle\Entity\ReservaHora'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cosaco_gesenbundle_reservahora';
    }
}
