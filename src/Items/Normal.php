<?php namespace App\Items;

class Normal extends Item
{
    public function tick()
    {
        $this->sellIn--;

        if ($this->sellIn < 0) {
            return $this->reduceQuality(2);
        }

        $this->reduceQuality();
    }
}