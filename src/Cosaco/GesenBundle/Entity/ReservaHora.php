<?php

namespace Cosaco\GesenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservaHora
 */
class ReservaHora
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fechaReserva;

    /**
     * @var \DateTime
     */
    private $fechaActualizacion;

    /**
     * @var \Cosaco\GesenBundle\Entity\Dependencia
     */
    private $dependencia;

    /**
     * @var \Cosaco\GesenBundle\Entity\Horario
     */
    private $horario;

    /**
     * @var \Cosaco\GesenBundle\Entity\ReservaDia
     */
    private $reservaDia;


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
     * Set fechaReserva
     *
     * @param \DateTime $fechaReserva
     * @return ReservaHora
     */
    public function setFechaReserva($fechaReserva)
    {
        $this->fechaReserva = $fechaReserva;

        return $this;
    }

    /**
     * Get fechaReserva
     *
     * @return \DateTime 
     */
    public function getFechaReserva()
    {
        return $this->fechaReserva;
    }

    /**
     * Get fechaActualizacion
     *
     * @return \DateTime 
     */
    public function getFechaActualizacion()
    {
        return $this->fechaActualizacion;
    }

    /**
     * Set dependencia
     *
     * @param \Cosaco\GesenBundle\Entity\Dependencia $dependencia
     * @return ReservaHora
     */
    public function setDependencia(\Cosaco\GesenBundle\Entity\Dependencia $dependencia = null)
    {
        $this->dependencia = $dependencia;

        return $this;
    }

    /**
     * Get dependencia
     *
     * @return \Cosaco\GesenBundle\Entity\Dependencia 
     */
    public function getDependencia()
    {
        return $this->dependencia;
    }

    /**
     * Set horario
     *
     * @param \Cosaco\GesenBundle\Entity\Horario $horario
     * @return ReservaHora
     */
    public function setHorario(\Cosaco\GesenBundle\Entity\Horario $horario = null)
    {
        $this->horario = $horario;

        return $this;
    }

    /**
     * Get horario
     *
     * @return \Cosaco\GesenBundle\Entity\Horario 
     */
    public function getHorario()
    {
        return $this->horario;
    }

    /**
     * Set reservaDia
     *
     * @param \Cosaco\GesenBundle\Entity\ReservaDia $reservaDia
     * @return ReservaHora
     */
    public function setReservaDia(\Cosaco\GesenBundle\Entity\ReservaDia $reservaDia = null)
    {
        $this->reservaDia = $reservaDia;

        return $this;
    }

    /**
     * Get reservaDia
     *
     * @return \Cosaco\GesenBundle\Entity\ReservaDia 
     */
    public function getReservaDia()
    {
        return $this->reservaDia;
    }
}
