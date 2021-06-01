<?php
/**
 * Created by PhpStorm.
 * User: nl
 * Date: 01/06/2021
 * Time: 19:46
 */
class UserRepositoryEloquent extends AbstractRepository implements UserRepository {

    public function model()
    {
        return User::class;
    }

}