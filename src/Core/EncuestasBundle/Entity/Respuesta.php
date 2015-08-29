<?php

namespace Core\EncuestasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Respuesta
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Respuesta
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
     * @ORM\Column(name="comentario", type="string", length=100)
     */
    private $comentario;

    /**
     * @var integer
     *
     * @ORM\OneToOne(targetEntity="Opcion")
     */
    private $opcion;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Egresado")
     */
    private $egresado;


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
     * Set comentario
     *
     * @param string $comentario
     * @return Respuesta
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string 
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set opcion
     *
     * @param integer $opcion
     * @return Respuesta
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

    /**
     * Set egresado
     *
     * @param integer $egresado
     * @return Respuesta
     */
    public function setEgresado($egresado)
    {
        $this->egresado = $egresado;

        return $this;
    }

    /**
     * Get egresado
     *
     * @return integer 
     */
    public function getEgresado()
    {
        return $this->egresado;
    }
}
