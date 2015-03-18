<?php

namespace Cosaco\GesenBundle\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;

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
     * @var DateTime
     */
    private $fechaActualizacion;

    /**
     * @var Reserva
     */
    private $reserva;

   /**
     * @var ArrayCollection
     */
    private $horas;

    /*
     * Constructor 
     * Valor por defecto para campos
     */
    public function __construct() {
        $this->horas = new ArrayCollection();
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
    
    /*
     * Get horas
     *
     * @return Collection
     */
    public function getHoras()
    {
        return $this->horas;
    }
    
    /*
     * Agregar horas
     */
    public function addHora(ReservaHora $hora)
    {
        // Agregamos el id de la reserva
        $hora->setReservaDia($this);
        
        $this->horas->add($hora);
        
        return $this;
    }
    
    /*
     * Quitar horas
     */
    public function removeHora(ReservaHora $hora)
    {
        $this->horas->removeElement($hora);
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
     * @return DateTime 
     */
    public function getFechaActualizacion()
    {
        return $this->fechaActualizacion;
    }

    /**
     * Set reserva
     *
     * @param Reserva $reserva
     * @return ReservaDia
     */
    public function setReserva(Reserva $reserva = null)
    {
        $this->reserva = $reserva;

        return $this;
    }

    /**
     * Get reserva
     *
     * @return Reserva 
     */
    public function getReserva()
    {
        return $this->reserva;
    }
    
    public function __toString() {
        return (string)$this->actividadReserva;
    }
}
