<?php

namespace Core\EncuestasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Config\Definition\IntegerNode;

/**
 * Ciudad
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Ciudad
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
     * @var Integer
     * @ORM\ManyToOne(targetEntity="Departamento")
     */
    private $departamento;


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
     * @return Ciudad
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
	 * @return the Integer
	 */
	public function getDepartamento() {
		return $this->departamento;
	}
	
	/**
	 *
	 * @param $departamento
	 * 
	 */
	public function setDepartamento($departamento) {
		$this->departamento = $departamento;
	}
	
    
    
}
