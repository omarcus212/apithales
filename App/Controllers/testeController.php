<?php

namespace App\Controllers;

use App\BD\Contact\IccidBD;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Http\Response as Response;

final class testeController
{ 

public function getIccid( Request $request , Response $response , array $args) : Response{
        

    var_dump('teste');

    return $response;
    
}

}
?>