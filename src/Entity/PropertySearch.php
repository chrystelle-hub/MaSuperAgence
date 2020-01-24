<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

class PropertySearch
{
    /**
     * @var int|null
     */
    private $maxPrix;

    /**
     * @var int|null
     * @Assert\Range(min=10, max=400)
     */
    Private $minSurface;
    
    /**
     * @var ArrayCollection
     */
    private $options;


    public function __construct()
    {
        $this->options = new ArrayCollection();
    }
    /**
     *
     * @return int|null
     */
    public function getMaxPrix()
    {
        return $this->maxPrix;
    }

    /**
     * @param int $maxPrix
     * @return PropertySearch
     */
    public function setMaxPrix($maxPrix): PropertySearch
    {
        $this->maxPrix = $maxPrix;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMinSurface()
    {
        return $this->minSurface;
    }

    /**
     *
     * @param int $minSurface
     * @return PropertySearch
     */
    public function setMinSurface($minSurface): PropertySearch
    {
        $this->minSurface = $minSurface;
        return $this;
    }

    /**
     * Get the value of options
     *
     * @return  ArrayCollection
     */ 
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set the value of options
     *
     * @param  ArrayCollection  $options
     *
     * @return  self
     */ 
    public function setOptions(ArrayCollection $options)
    {
        $this->options = $options;

        return $this;
    }
}