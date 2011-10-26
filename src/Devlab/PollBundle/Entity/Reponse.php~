<?php

namespace Devlab\PollBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity
 * @ORM\Table(name="reponse")
 */
class Reponse {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer"),
     * @ORM\GeneratedValue(strategy="AUTO"),
     */
    protected $id;
    /**
     * @var text $text
     *
     * @ORM\Column(name="text", type="text")
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