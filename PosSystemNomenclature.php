<?php

namespace PosSystem;

/**
 * @property array $goods
 * @property array $menu
 */

class PosSystemNomenclature implements INomenclature {
    protected $products = [];
    protected $menu = [];


    public function getProducts(): array
    {
        return $this->goods ?? [];
    }

    public function getProduct($id)
    {
        return $this->goods[$id];
    }

    public function pushProduct(PosSystemProduct $product)
    {
        $this->products[$product->id] = $product;
    }

    public function getMenu(): array
    {
        return $this->menu ?? [];
    }

    public function pushMenu(PosSystemMenu $menu)
    {
        $this->menu[$menu->id] = $menu;
    }
}