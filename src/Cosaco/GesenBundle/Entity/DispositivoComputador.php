<?php

namespace Cosaco\GesenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DispositivoComputador
 */
class DispositivoComputador
{
    /**
     * @var integer
     */
    private $id;

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
    private $fechaActualizacion;

    /**
     * @var \Cosaco\GesenBundle\Entity\Computador
     */
    private $computador;

    /**
     * @var \Cosaco\GesenBundle\Entity\Dispositivo
     */
    private $dispositivo;


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
     * Set numeroSerie
     *
     * @param string $numeroSerie
     * @return DispositivoComputador
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
     * @return DispositivoComputador
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
     * Set fechaActualizacion
     *
     * @param \DateTime $fechaActualizacion
     * @return DispositivoComputador
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
     * Set computador
     *
     * @param \Cosaco\GesenBundle\Entity\Computador $computador
     * @return DispositivoComputador
     */
    public function setComputador(\Cosaco\GesenBundle\Entity\Computador $computador = null)
    {
        $this->computador = $computador;

        return $this;
    }

    /**
     * Get computador
     *
     * @return \Cosaco\GesenBundle\Entity\Computador 
     */
    public function getComputador()
    {
        return $this->computador;
    }

    /**
     * Set dispositivo
     *
     * @param \Cosaco\GesenBundle\Entity\Dispositivo $dispositivo
     * @return DispositivoComputador
     */
    public function setDispositivo(\Cosaco\GesenBundle\Entity\Dispositivo $dispositivo = null)
    {
        $this->dispositivo = $dispositivo;

        return $this;
    }

    /**
     * Get dispositivo
     *
     * @return \Cosaco\GesenBundle\Entity\Dispositivo 
     */
    public function getDispositivo()
    {
        return $this->dispositivo;
    }
}
