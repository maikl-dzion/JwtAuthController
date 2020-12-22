# JwtAuthController

##### $data  = array('id' => '234', 'username' => 'Maikl', 'email' => 'dzr@mail.ru');
##### $jwt   = new JwtAuthController();
##### $token  = $jwt->encode($data);
##### $verify = $jwt->decode($token);
##### $result = ['verify' => $verify, 'token' => $token]
##### print_r($result);
#####