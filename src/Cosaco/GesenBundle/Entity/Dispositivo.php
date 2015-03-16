<?php

namespace Cosaco\GesenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dispositivo
 */
class Dispositivo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $modelo;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $capacidad;

    /**
     * @var \DateTime
     */
    private $fechaActualizacion;

    /**
     * @var \Cosaco\GesenBundle\Entity\CategoriaHw
     */
    private $categoriaHw;

    /**
     * @var \Cosaco\GesenBundle\Entity\Fabricante
     */
    private $fabricante;


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
     * Set modelo
     *
     * @param string $modelo
     * @return Dispositivo
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Dispositivo
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set capacidad
     *
     * @param string $capacidad
     * @return Dispositivo
     */
    public function setCapacidad($capacidad)
    {
        $this->capacidad = $capacidad;

        return $this;
    }

    /**
     * Get capacidad
     *
     * @return string 
     */
    public function getCapacidad()
    {
        return $this->capacidad;
    }

    /**
     * Set fechaActualizacion
     *
     * @param \DateTime $fechaActualizacion
     * @return Dispositivo
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
     * Set categoriaHw
     *
     * @param \Cosaco\GesenBundle\Entity\CategoriaHw $categoriaHw
     * @return Dispositivo
     */
    public function setCategoriaHw(\Cosaco\GesenBundle\Entity\CategoriaHw $categoriaHw = null)
    {
        $this->categoriaHw = $categoriaHw;

        return $this;
    }

    /**
     * Get categoriaHw
     *
     * @return \Cosaco\GesenBundle\Entity\CategoriaHw 
     */
    public function getCategoriaHw()
    {
        return $this->categoriaHw;
    }

    /**
     * Set fabricante
     *
     * @param \Cosaco\GesenBundle\Entity\Fabricante $fabricante
     * @return Dispositivo
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
}
