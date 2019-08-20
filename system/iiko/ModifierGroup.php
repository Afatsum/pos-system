<?php

namespace PosSystem\system\iiko;

use PosSystem\Model;

/**
 * Class ModifierGroup
 *
 * @property string $id
 * @property string $name
 * @property string $groupId
 * @property string $price
 */
class ModifierGroup extends Model
{
    public $id;
    public $name;
    public $groupId;
    public $price;
}