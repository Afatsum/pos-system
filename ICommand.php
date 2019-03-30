<?php

namespace PosSystem;

interface ICommand
{
    public static function curl_get();

    public static function curl_post();
}