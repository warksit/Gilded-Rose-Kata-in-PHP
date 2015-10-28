<?php namespace App\Items;

class Item
{
    public $sellIn;
    public $quality;

    /**
     * ItemAbstract constructor.
     */
    public function __construct($quality, $sellIn)
    {
        $this->sellIn = $sellIn;
        $this->quality = $quality;
    }

    public function tick() {
        //
    }

    protected function reduceQuality($reduceBy=1) {
        if($this->quality - $reduceBy < 0) {
            return $this->quality = 0;
        }

        $this->quality -= $reduceBy;
    }

    protected function increaseQuality($increaseBy=1) {
        if ($this->quality + $increaseBy > 50) {
            return $this->quality = 50;
        }

        $this->quality += $increaseBy;
    }
}