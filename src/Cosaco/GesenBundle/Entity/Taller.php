<?php

namespace Cosaco\GesenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taller
 */
class Taller
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreTaller;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var \Cosaco\GesenBundle\Entity\Usuario
     */
    private $usuario;

    public function __toString() {
        return $this->nombreTaller;
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
     * Set estado
     *
     * @param string $estado
     * @return Taller
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
     * Set usuario
     *
     * @param \Cosaco\GesenBundle\Entity\Usuario $usuario
     * @return Taller
     */
    public function setUsuario(\Cosaco\GesenBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Cosaco\GesenBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set nombreTaller
     *
     * @param string $nombreTaller
     * @return Taller
     */
    public function setNombreTaller($nombreTaller)
    {
        $this->nombreTaller = $nombreTaller;

        return $this;
    }

    /**
     * Get nombreTaller
     *
     * @return string 
     */
    public function getNombreTaller()
    {
        return $this->nombreTaller;
    }
}
