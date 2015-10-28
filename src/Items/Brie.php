<?php namespace App\Items;

class Brie extends Item
{
    public function tick()
    {
        $this->sellIn--;

        if ($this->sellIn <= 0) {
            return $this->increaseQuality(2);
        }

        $this->increaseQuality();
    }
}