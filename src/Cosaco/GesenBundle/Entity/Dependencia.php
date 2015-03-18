<?php

namespace Cosaco\GesenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dependencia
 */
class Dependencia
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
     * @var string
     */
    private $prefijoHost;

    /**
     * @var string
     */
    private $grupoTrabajo;

    /**
     * @var \DateTime
     */
    private $fechaIngreso;

    /**
     * @var string
     */
    private $habilitadoHorario;

    /**
     * @var string
     */
    private $habilitadoDispositivo;

    /**
     * @var string
     */
    private $habilitadoMantencion;


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
     * @return Dependencia
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
     * Set prefijoHost
     *
     * @param string $prefijoHost
     * @return Dependencia
     */
    public function setPrefijoHost($prefijoHost)
    {
        $this->prefijoHost = $prefijoHost;

        return $this;
    }

    /**
     * Get prefijoHost
     *
     * @return string 
     */
    public function getPrefijoHost()
    {
        return $this->prefijoHost;
    }

    /**
     * Set grupoTrabajo
     *
     * @param string $grupoTrabajo
     * @return Dependencia
     */
    public function setGrupoTrabajo($grupoTrabajo)
    {
        $this->grupoTrabajo = $grupoTrabajo;

        return $this;
    }

    /**
     * Get grupoTrabajo
     *
     * @return string 
     */
    public function getGrupoTrabajo()
    {
        return $this->grupoTrabajo;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return Dependencia
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return \DateTime 
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set habilitadoHorario
     *
     * @param string $habilitadoHorario
     * @return Dependencia
     */
    public function setHabilitadoHorario($habilitadoHorario)
    {
        $this->habilitadoHorario = $habilitadoHorario;

        return $this;
    }

    /**
     * Get habilitadoHorario
     *
     * @return string 
     */
    public function getHabilitadoHorario()
    {
        return $this->habilitadoHorario;
    }

    /**
     * Set habilitadoDispositivo
     *
     * @param string $habilitadoDispositivo
     * @return Dependencia
     */
    public function setHabilitadoDispositivo($habilitadoDispositivo)
    {
        $this->habilitadoDispositivo = $habilitadoDispositivo;

        return $this;
    }

    /**
     * Get habilitadoDispositivo
     *
     * @return string 
     */
    public function getHabilitadoDispositivo()
    {
        return $this->habilitadoDispositivo;
    }

    /**
     * Set habilitadoMantencion
     *
     * @param string $habilitadoMantencion
     * @return Dependencia
     */
    public function setHabilitadoMantencion($habilitadoMantencion)
    {
        $this->habilitadoMantencion = $habilitadoMantencion;

        return $this;
    }

    /**
     * Get habilitadoMantencion
     *
     * @return string 
     */
    public function getHabilitadoMantencion()
    {
        return $this->habilitadoMantencion;
    }
    
    public function __toString() {
        return $this->nombre;
    }
}
