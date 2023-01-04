# dotenv-bench

PHPBench (1.2.6)

PHP version 8.0.26, xdebug ❌, opcache ❌

| benchmark          | #subject    | set | revs | its  | mem_peak  | mode      | rstdev   |
|--------------------|-------------|-----|------|------|-----------|-----------|----------|
| EnjoysDotEnvBench  | benchSimple |     | 1000 | 3    | 956.168kb | 604.168μs | ±2.04%   |
| VlucasDotEnvBench  | benchSimple |     | 1000 | 3    | 1.198mb   | 1.693ms   | ±0.52%   |
| SymfonyDotEnvBench | benchSimple |     | 1000 | 3    | 987.240kb | 1.193ms   | ±0.58%   |
