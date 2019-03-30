<?php

namespace PosSystem;

interface IModel
{
    public function load(array $list): bool;
}