<?php

namespace Cosaco\GesenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservaDia
 */
class ReservaDia
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $actividadReserva;

    /**
     * @var string
     */
    private $observacionReserva;

    /**
     * @var boolean
     */
    private $chequeoReserva;

    /**
     * @var \DateTime
     */
    private $fechaActualizacion;

    /**
     * @var \Cosaco\GesenBundle\Entity\Reserva
     */
    private $reserva;

    /*
     * Valor por defecto para campos
     */
    public function __construct() {
        $this->chequeoReserva='0';
    }

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
     * Set actividadReserva
     *
     * @param string $actividadReserva
     * @return ReservaDia
     */
    public function setActividadReserva($actividadReserva)
    {
        $this->actividadReserva = $actividadReserva;

        return $this;
    }

    /**
     * Get actividadReserva
     *
     * @return string 
     */
    public function getActividadReserva()
    {
        return $this->actividadReserva;
    }

    /**
     * Set observacionReserva
     *
     * @param string $observacionReserva
     * @return ReservaDia
     */
    public function setObservacionReserva($observacionReserva)
    {
        $this->observacionReserva = $observacionReserva;

        return $this;
    }

    /**
     * Get observacionReserva
     *
     * @return string 
     */
    public function getObservacionReserva()
    {
        return $this->observacionReserva;
    }

    /**
     * Set chequeoReserva
     *
     * @param boolean $chequeoReserva
     * @return ReservaDia
     */
    public function setChequeoReserva($chequeoReserva)
    {
        $this->chequeoReserva = $chequeoReserva;

        return $this;
    }

    /**
     * Get chequeoReserva
     *
     * @return boolean 
     */
    public function getChequeoReserva()
    {
        return $this->chequeoReserva;
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
     * Set reserva
     *
     * @param \Cosaco\GesenBundle\Entity\Reserva $reserva
     * @return ReservaDia
     */
    public function setReserva(\Cosaco\GesenBundle\Entity\Reserva $reserva = null)
    {
        $this->reserva = $reserva;

        return $this;
    }

    /**
     * Get reserva
     *
     * @return \Cosaco\GesenBundle\Entity\Reserva 
     */
    public function getReserva()
    {
        return $this->reserva;
    }
}
