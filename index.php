<?php

require_once __DIR__ . '/JwtAuthController.php';

use Core\Service\JwtAuthController;

$data  = array('id' => '234', 'username' => 'Maikl', 'email' => 'dzr@mail.ru');
$jwt   = new JwtAuthController();
$token  = $jwt->encode($data);
$verify = $jwt->decode($token);
print_r(['verify' => $verify, 'token' => $token]);


class UserController
{

    private $jwt;

    public function __construct(JwtAuthInterface $jwt)
    {
        $this->jwt = $jwt;
    }
}
