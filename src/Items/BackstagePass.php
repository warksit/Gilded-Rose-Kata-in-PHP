<?php namespace App\Items;

class BackstagePass extends Item
{
    public function tick()
    {
        $this->sellIn--;

        if ($this->sellIn < 0) {
            return $this->quality=0;;
        }

        if($this->sellIn < 5)
        {
            return $this->increaseQuality(3);
        }

        if($this->sellIn < 10)
        {
            return $this->increaseQuality(2);
        }

        $this->increaseQuality();
    }
}