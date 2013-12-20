<?php
// src/Acme/ResumeBundle/Entity/Highlight.php
namespace Acme\ResumeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="highlight")
 */
class Highlight
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=256)
     */
    protected $qualifications;


    /**
     * @ORM\ManyToOne(targetEntity="Profile", inversedBy="profiles")
     * @ORM\JoinColumn(name="profile_id", referencedColumnName="id")
    */
    protected $profile;




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
     * Set qualifications
     *
     * @param string $qualifications
     * @return Highlight
     */
    public function setQualifications($qualifications)
    {
        $this->qualifications = $qualifications;

        return $this;
    }

    /**
     * Get qualifications
     *
     * @return string 
     */
    public function getQualifications()
    {
        return $this->qualifications;
    }

    /**
     * Set profile
     *
     * @param \Acme\ResumeBundle\Entity\Profile $profile
     * @return Highlight
     */
    public function setProfile(\Acme\ResumeBundle\Entity\Profile $profile = null)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return \Acme\ResumeBundle\Entity\Profile 
     */
    public function getProfile()
    {
        return $this->profile;
    }
    
 
}
