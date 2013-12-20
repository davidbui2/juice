<?php
// src/Acme/ResumeBundle/Entity/Job.php
namespace Acme\ResumeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="job")
 */
class Job
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $company;
    
     /**
     * @ORM\Column(type="string", length=100)
     */
    protected $position;


    
    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $startdate;


    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $enddate;
    
    
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
     * Set company
     *
     * @param string $company
     * @return Job
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set position
     *
     * @param string $position
     * @return Job
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set startdate
     *
     * @param \DateTime $startdate
     * @return Job
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime 
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set enddate
     *
     * @param \DateTime $enddate
     * @return Job
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;

        return $this;
    }

    /**
     * Get enddate
     *
     * @return \DateTime 
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * Set profile
     *
     * @param \Acme\ResumeBundle\Entity\Profile $profile
     * @return Job
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
