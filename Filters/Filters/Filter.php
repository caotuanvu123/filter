<?php
/**
 * Created by PhpStorm.
 * User: nl
 * Date: 01/06/2021
 * Time: 19:34
 */
interface Filter {
    public static function apply(Builder $builder, $params);
}