<?php

/**
 * @author: Julien Mercier-Rojas <julien@jeckel-lab.fr>
 * Created at: 18/11/2021
 */

namespace JeckelLab\Contract\Presentation\ActionController;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

/**
 * Interface ActionControllerInterface
 * @package JeckelLab\Contract\Presentation\ActionController
 */
interface ActionControllerInterface
{
    /**
     * @param Request  $request
     * @param Response $response
     * @param array<string, string> $args
     * @return Response
     */
    public function __invoke(Request $request, Response $response, array $args): Response;
}
