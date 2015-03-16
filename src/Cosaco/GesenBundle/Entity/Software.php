<?php

namespace Cosaco\GesenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Software
 */
class Software
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $categoria;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $desarrollador;

    /**
     * @var string
     */
    private $version;

    /**
     * @var integer
     */
    private $servicePack;

    /**
     * @var string
     */
    private $arquitectura;

    /**
     * @var string
     */
    private $numSerie;

    /**
     * @var string
     */
    private $estado;


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
     * Set categoria
     *
     * @param string $categoria
     * @return Software
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Software
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
     * Set desarrollador
     *
     * @param string $desarrollador
     * @return Software
     */
    public function setDesarrollador($desarrollador)
    {
        $this->desarrollador = $desarrollador;

        return $this;
    }

    /**
     * Get desarrollador
     *
     * @return string 
     */
    public function getDesarrollador()
    {
        return $this->desarrollador;
    }

    /**
     * Set version
     *
     * @param string $version
     * @return Software
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set servicePack
     *
     * @param integer $servicePack
     * @return Software
     */
    public function setServicePack($servicePack)
    {
        $this->servicePack = $servicePack;

        return $this;
    }

    /**
     * Get servicePack
     *
     * @return integer 
     */
    public function getServicePack()
    {
        return $this->servicePack;
    }

    /**
     * Set arquitectura
     *
     * @param string $arquitectura
     * @return Software
     */
    public function setArquitectura($arquitectura)
    {
        $this->arquitectura = $arquitectura;

        return $this;
    }

    /**
     * Get arquitectura
     *
     * @return string 
     */
    public function getArquitectura()
    {
        return $this->arquitectura;
    }

    /**
     * Set numSerie
     *
     * @param string $numSerie
     * @return Software
     */
    public function setNumSerie($numSerie)
    {
        $this->numSerie = $numSerie;

        return $this;
    }

    /**
     * Get numSerie
     *
     * @return string 
     */
    public function getNumSerie()
    {
        return $this->numSerie;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Software
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
}
