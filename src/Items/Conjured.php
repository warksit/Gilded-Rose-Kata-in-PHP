<?php namespace App\Items;

class Conjured extends Item
{
    public function tick()
    {
        $this->sellIn--;

        if ($this->sellIn < 0) {
            return $this->reduceQuality(4);
        }

        $this->reduceQuality(2);
    }
}