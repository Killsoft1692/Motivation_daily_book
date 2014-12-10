<?php

namespace Acme\DailyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Tasks
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Tasks
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
     * @Assert\NotBlank()
     * @ORM\Column(name="main", type="text")
     */
    protected  $main;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="second", type="text")
     */
    protected  $second;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="third", type="text")
     */
    protected  $third;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="end", type="text")
     */
    protected  $end;

    /**
     * @var \DateTime
     * $Assert\Type("\DateTime")
     * @ORM\Column(name="dueDate", type="date")
     */
    protected  $dueDate;

    /**
     * @var string
     */
    protected $name;


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
     * Set main
     *
     * @param string $main
     * @return Tasks
     */
    public function setMain($main)
    {
        $this->main = $main;

        return $this;
    }

    /**
     * Get main
     *
     * @return string 
     */
    public function getMain()
    {
        return $this->main;
    }

    /**
     * Set second
     *
     * @param string $second
     * @return Tasks
     */
    public function setSecond($second)
    {
        $this->second = $second;

        return $this;
    }

    /**
     * Get second
     *
     * @return string 
     */
    public function getSecond()
    {
        return $this->second;
    }

    /**
     * Set 3rd_task
     *
     * @param string $third
     * @return Tasks
     */
    public function setThird($third)
    {
        $this->third = $third;

        return $this;
    }

    /**
     * Get third
     *
     * @return string 
     */
    public function getThird()
    {
        return $this->third;
    }

    /**
     * Set end
     *
     * @param string $end
     * @return Tasks
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return string 
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set dueDate
     *
     * @param \DateTime $dueDate
     * @return Tasks
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Get dueDate
     *
     * @return \DateTime 
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    public function getName()
    {
        return $this->name;
    }

    public function __toString()
    {
        return $this->getName();
    }
}
