<?php

namespace Cosaco\GesenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fabricante
 */
class Fabricante
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreFabricante;


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
     * Set nombreFabricante
     *
     * @param string $nombreFabricante
     * @return Fabricante
     */
    public function setNombreFabricante($nombreFabricante)
    {
        $this->nombreFabricante = $nombreFabricante;

        return $this;
    }

    /**
     * Get nombreFabricante
     *
     * @return string 
     */
    public function getNombreFabricante()
    {
        return $this->nombreFabricante;
    }
}
