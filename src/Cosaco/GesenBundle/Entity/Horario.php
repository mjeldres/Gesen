<?php

namespace Cosaco\GesenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horario
 */
class Horario
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $horaInicio;

    /**
     * @var \DateTime
     */
    private $horaTermino;

    /**
     * @var integer
     */
    private $bloqueId;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set horaInicio
     *
     * @param \DateTime $horaInicio
     * @return Horario
     */
    public function setHoraInicio($horaInicio)
    {
        $this->horaInicio = $horaInicio;

        return $this;
    }

    /**
     * Get horaInicio
     *
     * @return \DateTime 
     */
    public function getHoraInicio()
    {
        return $this->horaInicio;
    }

    /**
     * Set horaTermino
     *
     * @param \DateTime $horaTermino
     * @return Horario
     */
    public function setHoraTermino($horaTermino)
    {
        $this->horaTermino = $horaTermino;

        return $this;
    }

    /**
     * Get horaTermino
     *
     * @return \DateTime 
     */
    public function getHoraTermino()
    {
        return $this->horaTermino;
    }

    /**
     * Set bloqueId
     *
     * @param integer $bloqueId
     * @return Horario
     */
    public function setBloqueId($bloqueId)
    {
        $this->bloqueId = $bloqueId;

        return $this;
    }

    /**
     * Get bloqueId
     *
     * @return integer 
     */
    public function getBloqueId()
    {
        return $this->bloqueId;
    }
}
