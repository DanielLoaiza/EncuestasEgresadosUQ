<?php

namespace Core\EncuestasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Egresado
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Egresado
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
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=40)
     */
    private $apellidos;

    /**
     * @var integer
     *
     * @ORM\ManyToOne("TipoDocumento")
     */
    private $tipoDocumento;

    /**
     * @var integer
     *
     * @ORM\Column(name="genero", type="integer")
     */
    private $genero;

    /**
     * @var string
     *
     * @ORM\Column(name="redSocial", type="string", length=255)
     */
    private $redSocial;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Estrato")
     */
    private $estrato;

    /**
     * @var string
     *
     * @ORM\Column(name="celular", type="string", length=20)
     */
    private $celular;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=20)
     */
    private $telefono;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="anioEgreso", type="date")
     */
    private $anioEgreso;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroDocumento", type="string", length=25)
     */
    private $numeroDocumento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaNacimiento", type="date")
     */
    private $fechaNacimiento;


    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Ciudad")
     */
    private $ciudadResidencia;

    /**
     * @var integer
     *
     * @ORM\OneToOne(targetEntity="Empresa")
     */
    private $trabajo;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=100)
     */
    private $direccion;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaDiligenciamiento", type="date")
     */
    private $fechaDiligenciamiento;


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
     * @return Egresado
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
     * Set apellidos
     *
     * @param string $apellidos
     * @return Egresado
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
     * Set tipoDocumento
     *
     * @param integer $tipoDocumento
     * @return Egresado
     */
    public function setTipoDocumento($tipoDocumento)
    {
        $this->tipoDocumento = $tipoDocumento;

        return $this;
    }

    /**
     * Get tipoDocumento
     *
     * @return integer 
     */
    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }

    /**
     * Set genero
     *
     * @param integer $genero
     * @return Egresado
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get genero
     *
     * @return integer 
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set redSocial
     *
     * @param string $redSocial
     * @return Egresado
     */
    public function setRedSocial($redSocial)
    {
        $this->redSocial = $redSocial;

        return $this;
    }

    /**
     * Get redSocial
     *
     * @return string 
     */
    public function getRedSocial()
    {
        return $this->redSocial;
    }

    /**
     * Set estrato
     *
     * @param integer $estrato
     * @return Egresado
     */
    public function setEstrato($estrato)
    {
        $this->estrato = $estrato;

        return $this;
    }

    /**
     * Get estrato
     *
     * @return integer 
     */
    public function getEstrato()
    {
        return $this->estrato;
    }

    /**
     * Set celular
     *
     * @param string $celular
     * @return Egresado
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get celular
     *
     * @return string 
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Egresado
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Egresado
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set anioEgreso
     *
     * @param \DateTime $anioEgreso
     * @return Egresado
     */
    public function setAnioEgreso($anioEgreso)
    {
        $this->anioEgreso = $anioEgreso;

        return $this;
    }

    /**
     * Get anioEgreso
     *
     * @return \DateTime 
     */
    public function getAnioEgreso()
    {
        return $this->anioEgreso;
    }

    /**
     * Set numeroDocumento
     *
     * @param string $numeroDocumento
     * @return Egresado
     */
    public function setNumeroDocumento($numeroDocumento)
    {
        $this->numeroDocumento = $numeroDocumento;

        return $this;
    }

    /**
     * Get numeroDocumento
     *
     * @return string 
     */
    public function getNumeroDocumento()
    {
        return $this->numeroDocumento;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     * @return Egresado
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime 
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set paisResidencia
     *
     * @param integer $paisResidencia
     * @return Egresado
     */
    public function setPaisResidencia($paisResidencia)
    {
        $this->paisResidencia = $paisResidencia;

        return $this;
    }

    /**
     * Get paisResidencia
     *
     * @return integer 
     */
    public function getPaisResidencia()
    {
        return $this->paisResidencia;
    }

    /**
     * Set departamentoResidencia
     *
     * @param integer $departamentoResidencia
     * @return Egresado
     */
    public function setDepartamentoResidencia($departamentoResidencia)
    {
        $this->departamentoResidencia = $departamentoResidencia;

        return $this;
    }

    /**
     * Get departamentoResidencia
     *
     * @return integer 
     */
    public function getDepartamentoResidencia()
    {
        return $this->departamentoResidencia;
    }

    /**
     * Set municipioResidencia
     *
     * @param integer $municipioResidencia
     * @return Egresado
     */
    public function setMunicipioResidencia($municipioResidencia)
    {
        $this->municipioResidencia = $municipioResidencia;

        return $this;
    }

    /**
     * Get municipioResidencia
     *
     * @return integer 
     */
    public function getMunicipioResidencia()
    {
        return $this->municipioResidencia;
    }

    /**
     * Set trabajo
     *
     * @param integer $trabajo
     * @return Egresado
     */
    public function setTrabajo($trabajo)
    {
        $this->trabajo = $trabajo;

        return $this;
    }

    /**
     * Get trabajo
     *
     * @return integer 
     */
    public function getTrabajo()
    {
        return $this->trabajo;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Egresado
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }
	
	/**
	 *
	 * @return the DateTime
	 */
	public function getFechaDiligenciamiento() {
		return $this->fechaDiligenciamiento;
	}
	
	/**
	 *
	 * @param \DateTime $fechaDiligenciamiento        	
	 */
	public function setFechaDiligenciamiento(\DateTime $fechaDiligenciamiento) {
		$this->fechaDiligenciamiento = $fechaDiligenciamiento;
		return $this;
	}
	
    
    
    
    
}
