<?php

namespace Core\EncuestasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pregunta
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Pregunta
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
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Pregunta")
     */
    private $subPregunta;

    /**
     * @var string
     *
     * @ORM\Column(name="enunciado", type="string", length=500)
     */
    private $enunciado;


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
     * Set subPregunta
     *
     * @param integer $subPregunta
     * @return Pregunta
     */
    public function setSubPregunta($subPregunta)
    {
        $this->subPregunta = $subPregunta;

        return $this;
    }

    /**
     * Get subPregunta
     *
     * @return integer 
     */
    public function getSubPregunta()
    {
        return $this->subPregunta;
    }

    /**
     * Set enunciado
     *
     * @param string $enunciado
     * @return Pregunta
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
}
