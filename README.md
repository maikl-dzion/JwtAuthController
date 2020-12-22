# JwtAuthController

use Core\Service\JwtAuthController;

$data  = array('id' => '234', 'username' => 'Maikl', 'email' => 'dzr@mail.ru');
$jwt   = new JwtAuthController();
$token  = $jwt->encode($data);
$verify = $jwt->decode($token);
print_r(['verify' => $verify, 'token' => $token]);