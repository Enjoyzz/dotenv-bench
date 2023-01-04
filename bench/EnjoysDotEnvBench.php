<?php

declare(strict_types=1);


namespace Bech\DotEnv;

use Enjoys\Dotenv\Dotenv;
use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;

final class EnjoysDotEnvBench
{

    public function benchSimple()
    {
        $dotenv = new Dotenv(__DIR__ . '/_data/simple/.env', flags: Dotenv::CLEAR_MEMORY_AFTER_LOAD_ENV);
        $dotenv->loadEnv();
    }
}