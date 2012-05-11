<?php

namespace My\GithubTriggerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * My\GithubTriggerBundle\Entity\Commit
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Commit
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $info
     *
     * @ORM\Column(name="info", type="string", length=255)
     */
    private $info;


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
     * Set info
     *
     * @param string $info
     */
    public function setInfo($info)
    {
        $this->info = $info;
    }

    /**
     * Get info
     *
     * @return string 
     */
    public function getInfo()
    {
        return $this->info;
    }
}