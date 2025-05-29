<?php
namespace Availio;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Override;

class AvailioBundle extends Bundle
{
    #[Override]
    public function getPath(): string
    {
        return dirname(__DIR__);
    }
}