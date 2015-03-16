<?php

namespace Cosaco\GesenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MantencionComputador
 */
class MantencionComputador
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $observacionMantencion;

    /**
     * @var \DateTime
     */
    private $fechaActualizacion;

    /**
     * @var \Cosaco\GesenBundle\Entity\Computador
     */
    private $computador;

    /**
     * @var \Cosaco\GesenBundle\Entity\Mantencion
     */
    private $mantencion;


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
     * Set observacionMantencion
     *
     * @param string $observacionMantencion
     * @return MantencionComputador
     */
    public function setObservacionMantencion($observacionMantencion)
    {
        $this->observacionMantencion = $observacionMantencion;

        return $this;
    }

    /**
     * Get observacionMantencion
     *
     * @return string 
     */
    public function getObservacionMantencion()
    {
        return $this->observacionMantencion;
    }

    /**
     * Set fechaActualizacion
     *
     * @param \DateTime $fechaActualizacion
     * @return MantencionComputador
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
     * @return MantencionComputador
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
     * Set mantencion
     *
     * @param \Cosaco\GesenBundle\Entity\Mantencion $mantencion
     * @return MantencionComputador
     */
    public function setMantencion(\Cosaco\GesenBundle\Entity\Mantencion $mantencion = null)
    {
        $this->mantencion = $mantencion;

        return $this;
    }

    /**
     * Get mantencion
     *
     * @return \Cosaco\GesenBundle\Entity\Mantencion 
     */
    public function getMantencion()
    {
        return $this->mantencion;
    }
}
