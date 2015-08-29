<?php

namespace Core\EncuestasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstudianteIdioma
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class EstudianteIdioma
{

    /**
     * @var integer
     *
     * @ORM\Column(name="nivelEscribe", type="integer")
     */
    private $nivelEscribe;

    /**
     * @var integer
     *
     * @ORM\Column(name="nivelLee", type="integer")
     */
    private $nivelLee;

    /**
     * @var integer
     *
     * @ORM\Column(name="nivelHabla", type="integer")
     */
    private $nivelHabla;

    /**
     * @var integer
     *
     * @ORM\Column(name="nivelEscucha", type="integer")
     */
    private $nivelEscucha;

    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Egresado")
     */
    private $egresadoId;

    /**
     * @var integer
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Idioma")
     */
    private $idiomaId;


   

    /**
     * Set nivelEscribe
     *
     * @param integer $nivelEscribe
     * @return EstudianteIdioma
     */
    public function setNivelEscribe($nivelEscribe)
    {
        $this->nivelEscribe = $nivelEscribe;

        return $this;
    }

    /**
     * Get nivelEscribe
     *
     * @return integer 
     */
    public function getNivelEscribe()
    {
        return $this->nivelEscribe;
    }

    /**
     * Set nivelLee
     *
     * @param integer $nivelLee
     * @return EstudianteIdioma
     */
    public function setNivelLee($nivelLee)
    {
        $this->nivelLee = $nivelLee;

        return $this;
    }

    /**
     * Get nivelLee
     *
     * @return integer 
     */
    public function getNivelLee()
    {
        return $this->nivelLee;
    }

    /**
     * Set nivelHabla
     *
     * @param integer $nivelHabla
     * @return EstudianteIdioma
     */
    public function setNivelHabla($nivelHabla)
    {
        $this->nivelHabla = $nivelHabla;

        return $this;
    }

    /**
     * Get nivelHabla
     *
     * @return integer 
     */
    public function getNivelHabla()
    {
        return $this->nivelHabla;
    }

    /**
     * Set nivelEscucha
     *
     * @param integer $nivelEscucha
     * @return EstudianteIdioma
     */
    public function setNivelEscucha($nivelEscucha)
    {
        $this->nivelEscucha = $nivelEscucha;

        return $this;
    }

    /**
     * Get nivelEscucha
     *
     * @return integer 
     */
    public function getNivelEscucha()
    {
        return $this->nivelEscucha;
    }


    /**
     * Get egresadoId
     *
     * @return integer 
     */
    public function getEgresadoId()
    {
        return $this->egresadoId;
    }


    /**
     * Get idiomaId
     *
     * @return integer 
     */
    public function getIdiomaId()
    {
        return $this->idiomaId;
    }
}
