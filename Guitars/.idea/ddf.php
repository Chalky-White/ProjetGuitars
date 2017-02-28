<?php
/**
 * Created by PhpStorm.
 * User: Stax
 * Date: 28/02/2017
 * Time: 18:03
 */

** * Add guitar     
*
     * @param Guitar $guitar
*
     * @return Guitar
    */
    public function addGuitar(Guitar $guitar)
{
    if (!$this->guitars->contains($guitar)) {
        $this->guitars->add($guitar);
        $guitar->addFeature($this);
    }

    return $this;
}

   /**
    * Remove $guitar
    *
    * @param Guitar $guitar
    *
    * @return Guitar
    */
    public function removeGuitar(Guitar $guitar)
{
    if ($this->guitars->contains($guitar)) {
        $this->guitars->removeElement($guitar);
        $guitar->removeFeature($this);
    }

    return $this;
}

   /**
    * Get guitars
    *
    * @return ArrayCollection
    */
    public function getGuitars()
{
    return $this->guitars;
}