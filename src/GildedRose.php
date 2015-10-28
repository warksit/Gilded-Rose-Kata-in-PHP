<?php namespace App;


class GildedRose
{
    public static function of($name, $quality, $sellIn) {
        $lookup = [
            'normal' => Items\Normal::class,
            'Aged Brie' => Items\Brie::class,
            'Backstage passes to a TAFKAL80ETC concert' => Items\BackstagePass::class,
            'Conjured Mana Cake' => Items\Conjured::class,
        ];

        array_key_exists($name, $lookup) ?
            $class = $lookup[$name] :
            $class = Items\Item::class;

        return new $class($quality, $sellIn);
    }
}
