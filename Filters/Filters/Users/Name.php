<?php
require_once '../Filter.php';

/**
 * Created by PhpStorm.
 * User: nl
 * Date: 01/06/2021
 * Time: 19:39
 */
class Name implements Filter {
    public static function apply(Builder $builder, $value)
    {
        return $builder->where('name', $value);
    }
}