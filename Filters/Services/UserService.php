<?php
/**
 * Created by PhpStorm.
 * User: nl
 * Date: 01/06/2021
 * Time: 19:45
 */

class UserService {
    public $userRepository;

    public function __construct()
    {
        // em viet theo laravel luon
        $this->userRepository = app(UserRepository::class);

    }

    public function all($colums = ['*'], $params)
    {
        return $this->userRepository->all($colums, $params);
    }
}