<?php

namespace Cosaco\GesenBundle\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Reserva
 */
class Reserva
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $tipoReserva;

    /**
     * @var DateTime
     */
    private $fechaActualizacion;

    /**
     * @var Asignatura
     */
    private $asignatura;

    /**
     * @var Usuario
     */
    private $usuario;

    /**
     * @var Curso
     */
    private $curso;

    /**
     * @var Taller
     */
    private $taller;
    
    /**
     * @var ArrayCollection
     */
    private $dias;

    /*
     * Constructor
     */
    public function __construct() {
        $this->dias = new ArrayCollection();
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
     * Get dias
     *
     * @return Collection
     */
    public function getDias()
    {
        return $this->dias;
    }
    
    /*
     * Agregar dias
     */
    public function addDia(ReservaDia $dia)
    {
        // Agregamos el id de la reserva
        $dia->setReserva($this);
        
        $this->dias->add($dia);
        
        return $this;
    }
    
    /*
     * Quitar dias
     */
    public function removeDia(ReservaDia $dia)
    {
        $this->dias->removeElement($dia);
    }
    
    /**
     * Set tipoReserva
     *
     * @param string $tipoReserva
     * @return Reserva
     */
    public function setTipoReserva($tipoReserva)
    {
        $this->tipoReserva = $tipoReserva;

        return $this;
    }

    /**
     * Get tipoReserva
     *
     * @return string 
     */
    public function getTipoReserva()
    {
        return $this->tipoReserva;
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
     * Set asignatura
     *
     * @param Asignatura $asignatura
     * @return Reserva
     */
    public function setAsignatura(Asignatura $asignatura = null)
    {
        $this->asignatura = $asignatura;

        return $this;
    }

    /**
     * Get asignatura
     *
     * @return Asignatura 
     */
    public function getAsignatura()
    {
        return $this->asignatura;
    }

    /**
     * Set usuario
     *
     * @param Usuario $usuario
     * @return Reserva
     */
    public function setUsuario(Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set curso
     *
     * @param Curso $curso
     * @return Reserva
     */
    public function setCurso(Curso $curso = null)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get curso
     *
     * @return Curso 
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set taller
     *
     * @param Taller $taller
     * @return Reserva
     */
    public function setTaller(Taller $taller = null)
    {
        $this->taller = $taller;

        return $this;
    }

    /**
     * Get taller
     *
     * @return Taller 
     */
    public function getTaller()
    {
        return $this->taller;
    }
    
    public function __toString() {
        return (string)$this->id;
    }
}
