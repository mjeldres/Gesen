<?php

namespace Cosaco\GesenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoriaHw
 */
class CategoriaHw
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $cantidadHw;

    /**
     * @var string
     */
    private $unidadHw;


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
     * Set nombre
     *
     * @param string $nombre
     * @return CategoriaHw
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set cantidadHw
     *
     * @param integer $cantidadHw
     * @return CategoriaHw
     */
    public function setCantidadHw($cantidadHw)
    {
        $this->cantidadHw = $cantidadHw;

        return $this;
    }

    /**
     * Get cantidadHw
     *
     * @return integer 
     */
    public function getCantidadHw()
    {
        return $this->cantidadHw;
    }

    /**
     * Set unidadHw
     *
     * @param string $unidadHw
     * @return CategoriaHw
     */
    public function setUnidadHw($unidadHw)
    {
        $this->unidadHw = $unidadHw;

        return $this;
    }

    /**
     * Get unidadHw
     *
     * @return string 
     */
    public function getUnidadHw()
    {
        return $this->unidadHw;
    }
}
