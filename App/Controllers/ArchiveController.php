<?php

namespace App\Controllers;

use App\BD\Contact\IccidBD;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Http\Response as Response;

final class ArchiveController
{

    public function getIccid(Request $request, Response $response, array $args): Response
    {

        $ArchiveIccid = new IccidBD();

        $archivres = $ArchiveIccid->get_All();
        $response = $response->withJson($archivres);

        return $response;

    }

}
?>