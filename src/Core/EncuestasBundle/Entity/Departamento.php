<?php

namespace Core\EncuestasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departamento
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Departamento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=30)
     */
    private $nombre;
    
    /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="Pais")
     */
    private $pais;


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
     * @return Departamento
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
	 *
	 * @return the pais
	 */
	public function getPais() {
		return $this->pais;
	}
	
	/**
	 *
	 * @param unknown_type $pais        	
	 */
	public function setPais($pais) {
		$this->pais = $pais;
	}
	
    
    
    
    
}
