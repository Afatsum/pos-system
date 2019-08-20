<?php

namespace PosSystem\system\iiko;

use PosSystem\Model;

/**
 * Class Modifier
 *
 * @property string $id
 * @property string $name
 * @property string $groupId
 * @property string $price
 */
class Modifier extends Model
{
    public $id;
    public $name;
    public $groupId;
    public $price;
}