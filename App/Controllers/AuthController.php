<?php

namespace App\Controllers;

use App\BD\Contact\AuthBD;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Http\Response as Response;

final class AuthController
{

    public function PostLogin(Request $request, Response $response, array $args): Response
    {    
        $auth = new AuthBD();
         
        $user = $request -> getParsedBody();
        var_dump($user);

        if(empty($user)){
            return $response = $response->withJson(['RESPOSTA' => 'Usuario devera se logar para ter acesso a requisição'])->withStatus(401);
        }

        $login = $auth -> Post_Login($user['email'],$user['nome'],$user['senha']);
         if(is_null($login))
         return $response -> withStatus(401);
          
         

         $userlogin = [
            'id' => $login -> getId(),
            'username' => $login ->getNome(),
            'password' => $login ->getSenha()
       ]; 


       $response = $response->withJson($userlogin);

        return $response;

    }

}
?>