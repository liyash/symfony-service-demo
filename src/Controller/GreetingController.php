<?php
namespace Availio\Controller;

use Availio\Service\GreetingService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GreetingController
{

    public function __construct(private readonly GreetingService $greetingService)
    {
    }

    #[Route('/hello/{name}', name: 'app_greet')]
    public function greet(string $name): Response
    {
        $greeting = $this->greetingService->greet($name);
        return new Response($greeting);
    }
}
