<?php
namespace Submodule\Controller;

use Submodule\Service\GreetingService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GreetingController
{
    private GreetingService $greetingService;

    public function __construct(GreetingService $greetingService)
    {
        $this->greetingService = $greetingService;
    }

    #[Route('/hello/{name}', name: 'app_greet')]
    public function greet(string $name): Response
    {
        $greeting = $this->greetingService->greet($name);
        return new Response($greeting);
    }
}
