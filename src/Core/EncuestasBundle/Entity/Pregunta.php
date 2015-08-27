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
     * @var string
     *
     * @ORM\Column(name="enunciado", type="string", length=600)
     */
    private $enunciado;

    /**
     * @var integer
     *
     * @ORM\Column(name="opcion", type="integer")
     */
    private $opcion;


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

    /**
     * Set opcion
     *
     * @param integer $opcion
     * @return Pregunta
     */
    public function setOpcion($opcion)
    {
        $this->opcion = $opcion;

        return $this;
    }

    /**
     * Get opcion
     *
     * @return integer 
     */
    public function getOpcion()
    {
        return $this->opcion;
    }
}
