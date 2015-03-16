<?php

namespace Cosaco\GesenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SoftwareComputador
 */
class SoftwareComputador
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fechaActualizacion;

    /**
     * @var \Cosaco\GesenBundle\Entity\Computador
     */
    private $computador;

    /**
     * @var \Cosaco\GesenBundle\Entity\Software
     */
    private $software;


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
     * Set fechaActualizacion
     *
     * @param \DateTime $fechaActualizacion
     * @return SoftwareComputador
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
     * @return SoftwareComputador
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
     * Set software
     *
     * @param \Cosaco\GesenBundle\Entity\Software $software
     * @return SoftwareComputador
     */
    public function setSoftware(\Cosaco\GesenBundle\Entity\Software $software = null)
    {
        $this->software = $software;

        return $this;
    }

    /**
     * Get software
     *
     * @return \Cosaco\GesenBundle\Entity\Software 
     */
    public function getSoftware()
    {
        return $this->software;
    }
}
