<?php

namespace Cosaco\GesenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * Usuario
 */
class Usuario implements AdvancedUserInterface, \Serializable
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $cargo;

    /**
     * @var string
     */
    private $nombres;
    
    /**
     * @var string
     */
    private $apellidos;

    /**
     * @var string
     */
    private $user;

    /**
     * @var string
     */
    private $userpw;

    /**
     * @var \DateTime
     */
    private $fechaActualizacion;

    /**
     * @var string
     */
    private $estado;
    
    /**
     * @var string
     */
    private $roles;
    
     /*
     * Constructor
     */
    public function _construct()
    {
        $this->primerNombre='$this->getPrimerNombre()';
           
    }

    /*
     *  Get string
     * 
     * @return string
     */
    public function __toString() {
        return $this->nombres. ' ' .$this->apellidos;
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
     * Set cargo
     *
     * @param string $cargo
     * @return Usuario
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return string 
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     * @return Usuario
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string 
     */
    public function getNombres()
    {
        return $this->nombres;
    }
    
    /**
     * Get nombres
     *
     * @return string 
     */
    public function getPrimerNombre()
    {
        // Convertimos en array la cadena separando por espacios
        $nombre=explode(" ", $this->nombres);
        
        // Retornamos el primer nombre
        return $nombre[0];
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return Usuario
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set user
     *
     * @param string $user
     * @return Usuario
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set userpw
     *
     * @param string $userpw
     * @return Usuario
     */
    public function setUserpw($userpw)
    {
        $this->userpw = $userpw;

        return $this;
    }

    /**
     * Get userpw
     *
     * @return string 
     */
    public function getUserpw()
    {
        return $this->userpw;
    }

    /**
     * Set fechaActualizacion
     *
     * @param \DateTime $fechaActualizacion
     * @return Usuario
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
     * Set estado
     *
     * @param string $estado
     * @return Usuario
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
     * Set roles
     *
     * @param string $roles
     * @return Usuario
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }


    
    /*
     *  Metodos para iniciar sesion
     */
    
    /*
     * Usuario
     * 
     * @return string 
     */
    public function getUsername() {
        return $this->user;
    }
    
    /*
     * Password
     *
     * @return string 
     */
    public function getPassword() {
        return $this->userpw;
    }
    
    /**
     * Get roles
     *
     * @return string 
     */
    public function getRoles()
    {
        return array($this->roles);
    }
    
   /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }


    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->user,
            $this->userpw,
            // see section on salt below
            // $this->salt,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->user,
            $this->userpw,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
    }

    public function getSalt() {
        
    }

    public function isAccountNonExpired() {
        return true;
    }

    public function isAccountNonLocked() {
        return true;        
    }

    public function isCredentialsNonExpired() {
         return true;       
    }

    public function isEnabled() {
        
        if($this->estado=='a') {
            return true;
            
        } else {
            return false;
        }
    }

}
