<?php

namespace PosSystem\system\iiko;

use PosSystem\PosSystemNomenclature;

class Nomenclature extends PosSystemNomenclature {

    protected $modifierGroups;
    protected $modifiers;

    public function getModifierGroups(): array
    {
        return $this->modifierGroups ?? [];
    }

    public function pushModifierGroup(ModifierGroup $modifierGroup)
    {
        $this->modifierGroups[$modifierGroup->id] = $modifierGroup;
    }

    public function getModifiers(): array
    {
        return $this->modifiers ?? [];
    }

    public function pushModifier(Modifier $modifier)
    {
        $this->modifiers[$modifier->id] = $modifier;
    }

    /**
     * На основе полученных данных из pos системы о наменлатуре партнера, строим удобную нам структуру номенклатуры
     * @param $posSystemNomenclature
     */
    public function load(array $posSystemNomenclature)
    {
        // Собираем данные о категориях
        if(isset($posSystemNomenclature->groups)) {
            foreach ($posSystemNomenclature->groups as $group) {
                $menu = new Menu();
                $menu->load($group);
                $this->pushMenu($menu);
            }
        }

        // Собираем данные о товарах и модификаторах
        if(isset($posSystemNomenclature->products)) {
            foreach ($posSystemNomenclature->products as $iikoProduct) {
                if($iikoProduct->type === 'dish') {
                    $product = new Product();
                    $product->load($iikoProduct);
                    $this->pushProduct($product);
                } elseif($iikoProduct->type === 'modifier') {
                    $modifier = new Modifier();
                    $modifier->load($iikoProduct);
                    $this->pushModifier($modifier);
                }
            }
        }

        // Собираем данные о группах модификаторов
        /** @var Menu[] $menus */
        /** @var Modifier[] $modifierList */
        $menuList = $this->getMenu();
        $modifierList = $this->getModifiers();

        foreach ($modifierList as $modifierItem) {
            if(!isset($menuList[$modifierItem->groupId]) && !isset($this->modifierGroups[$modifierItem->groupId])) {
                continue;
            }

            $menuGroupModifier = $menuList[$modifierItem->groupId];

            $groupModifier = new ModifierGroup();
            $groupModifier->load($menuGroupModifier);
            $this->pushModifierGroup($groupModifier);
        }
    }
}