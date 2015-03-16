<?php

namespace Cosaco\GesenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mantencion
 */
class Mantencion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $tipoMantencion;

    /**
     * @var string
     */
    private $ambitoMantencion;

    /**
     * @var string
     */
    private $detalleDiagnostico;

    /**
     * @var \DateTime
     */
    private $fechaDiagnostico;

    /**
     * @var string
     */
    private $detalleReparacion;

    /**
     * @var \DateTime
     */
    private $fechaReparacion;

    /**
     * @var \Cosaco\GesenBundle\Entity\Usuario
     */
    private $usuario;


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
     * Set tipoMantencion
     *
     * @param string $tipoMantencion
     * @return Mantencion
     */
    public function setTipoMantencion($tipoMantencion)
    {
        $this->tipoMantencion = $tipoMantencion;

        return $this;
    }

    /**
     * Get tipoMantencion
     *
     * @return string 
     */
    public function getTipoMantencion()
    {
        return $this->tipoMantencion;
    }

    /**
     * Set ambitoMantencion
     *
     * @param string $ambitoMantencion
     * @return Mantencion
     */
    public function setAmbitoMantencion($ambitoMantencion)
    {
        $this->ambitoMantencion = $ambitoMantencion;

        return $this;
    }

    /**
     * Get ambitoMantencion
     *
     * @return string 
     */
    public function getAmbitoMantencion()
    {
        return $this->ambitoMantencion;
    }

    /**
     * Set detalleDiagnostico
     *
     * @param string $detalleDiagnostico
     * @return Mantencion
     */
    public function setDetalleDiagnostico($detalleDiagnostico)
    {
        $this->detalleDiagnostico = $detalleDiagnostico;

        return $this;
    }

    /**
     * Get detalleDiagnostico
     *
     * @return string 
     */
    public function getDetalleDiagnostico()
    {
        return $this->detalleDiagnostico;
    }

    /**
     * Set fechaDiagnostico
     *
     * @param \DateTime $fechaDiagnostico
     * @return Mantencion
     */
    public function setFechaDiagnostico($fechaDiagnostico)
    {
        $this->fechaDiagnostico = $fechaDiagnostico;

        return $this;
    }

    /**
     * Get fechaDiagnostico
     *
     * @return \DateTime 
     */
    public function getFechaDiagnostico()
    {
        return $this->fechaDiagnostico;
    }

    /**
     * Set detalleReparacion
     *
     * @param string $detalleReparacion
     * @return Mantencion
     */
    public function setDetalleReparacion($detalleReparacion)
    {
        $this->detalleReparacion = $detalleReparacion;

        return $this;
    }

    /**
     * Get detalleReparacion
     *
     * @return string 
     */
    public function getDetalleReparacion()
    {
        return $this->detalleReparacion;
    }

    /**
     * Set fechaReparacion
     *
     * @param \DateTime $fechaReparacion
     * @return Mantencion
     */
    public function setFechaReparacion($fechaReparacion)
    {
        $this->fechaReparacion = $fechaReparacion;

        return $this;
    }

    /**
     * Get fechaReparacion
     *
     * @return \DateTime 
     */
    public function getFechaReparacion()
    {
        return $this->fechaReparacion;
    }

    /**
     * Set usuario
     *
     * @param \Cosaco\GesenBundle\Entity\Usuario $usuario
     * @return Mantencion
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
}
