<?php

namespace Devlab\PollBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity
 * @ORM\Table(name="question")
 */
class Question {

    /**
     * @ORM\ManyToMany(targetEntity="Reponse"),
     * @ORM\joinColumns={@JoinColumn(name="reponse_id", referencedColumnName="id")},
     * @ORM\inverseJoinColumns={@JoinColumn(name="question_id", referencedColumnName="id")}
     */
    
    public function __construct() {
        $this->questions = new Doctrine\Common\Collections\ArrayCollection();
        parent::__construct();
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

}