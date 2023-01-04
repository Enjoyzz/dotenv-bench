<?php

declare(strict_types=1);


namespace Bech\DotEnv;

use Dotenv\Dotenv;
use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;

final class VlucasDotEnvBench
{

    public function benchSimple()
    {
        $dotenv = Dotenv::createMutable([__DIR__ . '/_data/simple']);
        $dotenv->load();
    }
}