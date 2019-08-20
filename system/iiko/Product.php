<?php

namespace PosSystem\system\iiko;

use PosSystem\PosSystemProduct;

/**
 * Class Product
 *
 * @property string $description
 * @property string $parentGroup
 * @property string $weight
 * @property string $order
 * @property string $images
 * @property string $imageId
 * @property string $groupId
 * @property string $productCategoryId
 * @property string $price
 * @property string $carbohydrateAmount
 * @property string $energyAmount
 * @property string $fatAmount
 * @property string $fiberAmount
 * @property string $carbohydrateFullAmount
 * @property string $energyFullAmount
 * @property string $fatFullAmount
 * @property string $fiberFullAmount
 * @property string $type
 * @property string $isIncludedInMenu
 * @property array $modifiers
 * @property array $groupModifiers
 * @property string $additionalInfo
 * @property string $tags
 * @property string $MeasureUnit
 * @property string $doNotPrintInCheque
 * @property string $seoDescription
 * @property string $seoKeywords
 * @property string $seoText
 * @property string $seoTitle
 * @property string $prohibitedToSaleOn
 * @property string $differentPricesOn
 * @property string $isDeleted
 */

class Product extends PosSystemProduct
{
    public $description;
    public $weight;
    public $parentGroup;
    public $code;
    public $order;
    public $images;
    public $imageId;
    public $groupId;
    public $productCategoryId;
    public $carbohydrateAmount;
    public $energyAmount;
    public $fatAmount;
    public $fiberAmount;
    public $carbohydrateFullAmount;
    public $energyFullAmount;
    public $fatFullAmount;
    public $fiberFullAmount;
    public $type;
    public $isIncludedInMenu;
    public $modifiers;
    public $groupModifiers;
    public $additionalInfo;
    public $tags;
    public $MeasureUnit;
    public $doNotPrintInCheque;
    public $seoDescription;
    public $seoKeywords;
    public $seoText;
    public $seoTitle;
    public $prohibitedToSaleOn;
    public $differentPricesOn;
    public $isDeleted;

    public function __construct()
    {
    }
}
