<?php

declare(strict_types=1);


namespace Bech\DotEnv;

use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;
use Symfony\Component\Dotenv\Dotenv;

final class SymfonyDotEnvBench
{

    public function benchSimple()
    {
        $dotenv = new Dotenv();
        $dotenv->load(__DIR__ . '/_data/simple/.env');
    }
}