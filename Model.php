<?php

namespace PosSystem;

class Model implements IModel
{
    /**
     * @param array $list
     * @return bool
     */
    public function load(array $list): bool {
        foreach ($list as $key => $item) {
            $this->{$key} = $item;
        }

        return true;
    }
}