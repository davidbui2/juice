<?php
// src/Acme/ResumeBundle/Entity/Experience.php
namespace Acme\ResumeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="experience")
 */
class Experience
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
    protected $description;


    /**
     * @ORM\ManyToOne(targetEntity="Job", inversedBy="jobs")
     * @ORM\JoinColumn(name="job_id", referencedColumnName="id")
    */
    protected $job;


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
     * Set description
     *
     * @param string $description
     * @return Experience
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set job
     *
     * @param \Acme\ResumeBundle\Entity\Job $job
     * @return Experience
     */
    public function setJob(\Acme\ResumeBundle\Entity\Job $job = null)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return \Acme\ResumeBundle\Entity\Job 
     */
    public function getJob()
    {
        return $this->job;
    }
}
