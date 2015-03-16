<?php

namespace Cosaco\GesenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Curso
 */
class Curso
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $grado;

    /**
     * @var string
     */
    private $letra;

    /**
     * @var string
     */
    private $nivel;

    public function __toString() {
        return $this->grado. '° ' .$this->letra. ' '. $this->nivel;
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
     * Set grado
     *
     * @param string $grado
     * @return Curso
     */
    public function setGrado($grado)
    {
        $this->grado = $grado;

        return $this;
    }

    /**
     * Get grado
     *
     * @return string 
     */
    public function getGrado()
    {
        return $this->grado;
    }

    /**
     * Set letra
     *
     * @param string $letra
     * @return Curso
     */
    public function setLetra($letra)
    {
        $this->letra = $letra;

        return $this;
    }

    /**
     * Get letra
     *
     * @return string 
     */
    public function getLetra()
    {
        return $this->letra;
    }

    /**
     * Set nivel
     *
     * @param string $nivel
     * @return Curso
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return string 
     */
    public function getNivel()
    {
        return $this->nivel;
    }
}
