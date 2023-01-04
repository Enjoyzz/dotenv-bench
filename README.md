# dotenv-bench

PHPBench (1.2.6)

PHP version 8.0.26, xdebug ❌, opcache ❌

| benchmark          | #subject    | set | revs | its   | mem_peak  | mode      | rstdev  |
|--------------------|-------------|-----|------|-------|-----------|-----------|---------|
| EnjoysDotEnvBench  | benchSimple |     | 1000 | 3     | 955.296kb | 567.273μs | ±0.50%  |
| VlucasDotEnvBench  | benchSimple |     | 1000 | 3     | 1.198mb   | 1.702ms   | ±0.90%  |
| SymfonyDotEnvBench | benchSimple |     | 1000 | 3     | 987.240kb | 1.190ms   | ±0.79%  |
