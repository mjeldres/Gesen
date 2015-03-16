<?php

namespace Cosaco\GesenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Computador
 */
class Computador
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $plataforma;

    /**
     * @var string
     */
    private $nombreEquipo;

    /**
     * @var string
     */
    private $direccionMac;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var string
     */
    private $origen;

    /**
     * @var string
     */
    private $modelo;

    /**
     * @var string
     */
    private $numeroSerie;

    /**
     * @var string
     */
    private $observaciones;

    /**
     * @var \DateTime
     */
    private $fechaIngreso;

    /**
     * @var \DateTime
     */
    private $fechaActualizacion;

    /**
     * @var \Cosaco\GesenBundle\Entity\Dependencia
     */
    private $dependencia;

    /**
     * @var \Cosaco\GesenBundle\Entity\Fabricante
     */
    private $fabricante;

    /**
     * @var \Cosaco\GesenBundle\Entity\SistemaOperativo
     */
    private $sistemaOperativo;


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
     * Set plataforma
     *
     * @param string $plataforma
     * @return Computador
     */
    public function setPlataforma($plataforma)
    {
        $this->plataforma = $plataforma;

        return $this;
    }

    /**
     * Get plataforma
     *
     * @return string 
     */
    public function getPlataforma()
    {
        return $this->plataforma;
    }

    /**
     * Set nombreEquipo
     *
     * @param string $nombreEquipo
     * @return Computador
     */
    public function setNombreEquipo($nombreEquipo)
    {
        $this->nombreEquipo = $nombreEquipo;

        return $this;
    }

    /**
     * Get nombreEquipo
     *
     * @return string 
     */
    public function getNombreEquipo()
    {
        return $this->nombreEquipo;
    }

    /**
     * Set direccionMac
     *
     * @param string $direccionMac
     * @return Computador
     */
    public function setDireccionMac($direccionMac)
    {
        $this->direccionMac = $direccionMac;

        return $this;
    }

    /**
     * Get direccionMac
     *
     * @return string 
     */
    public function getDireccionMac()
    {
        return $this->direccionMac;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Computador
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set origen
     *
     * @param string $origen
     * @return Computador
     */
    public function setOrigen($origen)
    {
        $this->origen = $origen;

        return $this;
    }

    /**
     * Get origen
     *
     * @return string 
     */
    public function getOrigen()
    {
        return $this->origen;
    }

    /**
     * Set modelo
     *
     * @param string $modelo
     * @return Computador
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get modelo
     *
     * @return string 
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set numeroSerie
     *
     * @param string $numeroSerie
     * @return Computador
     */
    public function setNumeroSerie($numeroSerie)
    {
        $this->numeroSerie = $numeroSerie;

        return $this;
    }

    /**
     * Get numeroSerie
     *
     * @return string 
     */
    public function getNumeroSerie()
    {
        return $this->numeroSerie;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Computador
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return Computador
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return \DateTime 
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set fechaActualizacion
     *
     * @param \DateTime $fechaActualizacion
     * @return Computador
     */
    public function setFechaActualizacion($fechaActualizacion)
    {
        $this->fechaActualizacion = $fechaActualizacion;

        return $this;
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
     * @return Computador
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
     * Set fabricante
     *
     * @param \Cosaco\GesenBundle\Entity\Fabricante $fabricante
     * @return Computador
     */
    public function setFabricante(\Cosaco\GesenBundle\Entity\Fabricante $fabricante = null)
    {
        $this->fabricante = $fabricante;

        return $this;
    }

    /**
     * Get fabricante
     *
     * @return \Cosaco\GesenBundle\Entity\Fabricante 
     */
    public function getFabricante()
    {
        return $this->fabricante;
    }

    /**
     * Set sistemaOperativo
     *
     * @param \Cosaco\GesenBundle\Entity\SistemaOperativo $sistemaOperativo
     * @return Computador
     */
    public function setSistemaOperativo(\Cosaco\GesenBundle\Entity\SistemaOperativo $sistemaOperativo = null)
    {
        $this->sistemaOperativo = $sistemaOperativo;

        return $this;
    }

    /**
     * Get sistemaOperativo
     *
     * @return \Cosaco\GesenBundle\Entity\SistemaOperativo 
     */
    public function getSistemaOperativo()
    {
        return $this->sistemaOperativo;
    }
}
