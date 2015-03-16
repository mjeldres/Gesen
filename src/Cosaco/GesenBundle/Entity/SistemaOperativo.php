<?php

namespace Cosaco\GesenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SistemaOperativo
 */
class SistemaOperativo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $desarrollador;

    /**
     * @var string
     */
    private $nombre;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set desarrollador
     *
     * @param string $desarrollador
     * @return SistemaOperativo
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
     * Set nombre
     *
     * @param string $nombre
     * @return SistemaOperativo
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
     * Set version
     *
     * @param string $version
     * @return SistemaOperativo
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
     * @return SistemaOperativo
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
     * @return SistemaOperativo
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
}
