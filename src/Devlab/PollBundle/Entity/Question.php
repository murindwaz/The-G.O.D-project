<?php

namespace Devlab\PollBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity
 * @ORM\Table(name="question")
 */
class Question {



    /**
     * @ORM\ManyToMany(targetEntity="Reponse", cascade={"persist"}),
     */
    protected $reponses;


    public function __construct() {
        $this->reponses = new ArrayCollection();
    }

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *      
     */
    protected $id;
    /**
     * @ORM\Column(type="text")
     */
    protected $text;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set text
     *
     * @param text $text
     */
    public function setText($text) {
        $this->text = $text;
    }

    /**
     * Get text
     *
     * @return text 
     */
    public function getText() {
        return $this->text;
    }




    /**
     * Add reponses
     *
     * @param Devlab\PollBundle\Entity\Reponse $reponses
     */
    public function addReponse(\Devlab\PollBundle\Entity\Reponse $reponses)
    {
        $this->reponses[] = $reponses;
    }

    /**
     * Get reponses
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getReponses()
    {
        return $this->reponses;
    }

    /**
     * Set reponses
     *
     * @param ArrayCollection
     */
    public function setReponses($reponsesCollection)
    {
        $this->reponses = $reponsesCollection;
    }
}