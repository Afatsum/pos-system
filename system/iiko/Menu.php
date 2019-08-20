<?php

namespace PosSystem\system\iiko;

use PosSystem\PosSystemMenu;

/**
 * Class Menu
 *
 * @property int $code
 * @property int $description
 * @property int $order
 * @property int $parentGroup
 * @property string $images
 * @property int $imageId
 * @property int $isIncludedInMenu
 * @property string $additionalInfo
 * @property int $tags
 * @property string $seoDescription
 * @property string $seoKeywords
 * @property string $seoText
 * @property string $seoTitle
 * @property string $isDeleted
 */

class Menu extends PosSystemMenu
{

    public $code;
    public $description;
    public $order;
    public $parentGroup;
    public $images;
    public $imageId;
    public $isIncludedInMenu;
    public $additionalInfo;
    public $tags;
    public $seoDescription;
    public $seoKeywords;
    public $seoText;
    public $seoTitle;

    public function __construct()
    {
    }
}
