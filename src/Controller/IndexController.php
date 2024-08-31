<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

#[AsController]
final class IndexController
{
    #[Route(path: "/", methods: ["GET"])]
    public function indexAction(): Response
    {
        return new Response("Hello, world!");
    }
}
