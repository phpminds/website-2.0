<?php
declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get('/', function ($request, $response, $args) {
        return $this->get('view')->render($response, 'home/index.html.twig', [
        ]);
    })->setName('home');

    $app->get('/upcoming-events', function ($request, $response, $args) {
        return $this->get('view')->render($response, 'home/upcoming.html.twig', [
        ]);
    })->setName('upcoming-events');

    $app->get('/previous-events', function ($request, $response, $args) {
        return $this->get('view')->render($response, 'home/previousevents.html.twig', [
        ]);
    })->setName('previous-events');


    $app->get('/speak-here', function ($request, $response, $args) {
        return $this->get('view')->render($response, 'home/speakhere.html.twig', [
        ]);
    })->setName('speak');

    $app->get('/code-of-conduct', function ($request, $response, $args) {
        return $this->get('view')->render($response, 'home/codeofconduct.html.twig', [
        ]);
    })->setName('code-of-conduct');

    $app->get('/sponsors', function ($request, $response, $args) {
        return $this->get('view')->render($response, 'home/sponsors.html.twig', [
        ]);
    })->setName('sponsors ');

    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
    });
};
