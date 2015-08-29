<?php

namespace Core\EncuestasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Opcion
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Opcion
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
     * @ORM\Column(name="enunciado", type="string", length=150)
     */
    private $enunciado;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Pregunta")
     */
    private $pregunta;


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
     * Set enunciado
     *
     * @param string $enunciado
     * @return Opcion
     */
    public function setEnunciado($enunciado)
    {
        $this->enunciado = $enunciado;

        return $this;
    }

    /**
     * Get enunciado
     *
     * @return string 
     */
    public function getEnunciado()
    {
        return $this->enunciado;
    }

    /**
     * Set pregunta
     *
     * @param integer $pregunta
     * @return Opcion
     */
    public function setPregunta($pregunta)
    {
        $this->pregunta = $pregunta;

        return $this;
    }

    /**
     * Get pregunta
     *
     * @return integer 
     */
    public function getPregunta()
    {
        return $this->pregunta;
    }
}
