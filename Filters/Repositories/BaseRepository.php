<?php
/**
 * Created by PhpStorm.
 * User: nl
 * Date: 01/06/2021
 * Time: 19:47
 */
abstract class BaseRepository {

    // code base repo
    public abstract function all($params, $colums  = ['*']);
}