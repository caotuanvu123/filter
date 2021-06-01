<?php
/**
 * Created by PhpStorm.
 * User: nl
 * Date: 01/06/2021
 * Time: 19:50
 */

class UserController {
    private $userService;

    public function __construct()
    {
        $this->userService = UserService::class;
    }

    public function index()
    {
        // get request
        $params = $_GET;

        return $this->userService->all($params);
    }
}