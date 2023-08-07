<?php

namespace App\Controllers;

use App\BD\Contact\AuthBD;
use App\Model\TokenModel;
use Firebase\JWT\JWT;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Http\Response as Response;

final class AuthController
{

    public function PostLogin(Request $request, Response $response, array $args): Response
    {   
        $tokenModel = new TokenModel();
        $auth = new AuthBD();

        $user = $request->getParsedBody();


        if (empty($user)) {
            return $response = $response->withJson(['RESPOSTA' => 'Usuario devera se logar para ter acesso a requisição'])->withStatus(401);
        }

        $login = $auth->Post_Login($user['email'], $user['nome'], $user['senha']);
        if (is_null($login))
            return $response->withStatus(401);

        $expiredDate = (new \DateTime())->modify('+1 day')
            ->format('d-m-y H:i:s');



        $userlogin = [
            'id' => $login->getId(),
            'email' => $login->getEmail(),
            'username' => $login->getNome(),
            'password' => $login->getSenha(),
            'expt_date' => $expiredDate

        ];


        $refreshTokenPayload = [
            'username' => $userlogin
        ];

        $token = JWT::encode($userlogin, getenv('JWT_SECRET_KEY'));
        $refreshToken = JWT::encode($refreshTokenPayload, getenv('JWT_SECRET_KEY'));

        $tokenModel->setToken($token)->setRefresh_token($refreshToken)->setExpired_at($expiredDate)->setusuarios_id($login->getId());

        $tokensDAO = new AuthBD();
        $tokensDAO->createToken($tokenModel);
        if (!empty($userlogin)) {
            $response = $response->withJson([['return' => true],['Token' => $token,'refersh_token'=> $refreshToken]]);
        } else {
            $response = $response->withJson(['user' => 'does not exist', 'return' => false]);
        }
        
        return $response;

    }

}
?>