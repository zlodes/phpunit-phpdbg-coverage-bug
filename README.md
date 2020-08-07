# Cases

## XDebug:

```bash
$ ./vendor/bin/phpunit
PHPUnit 9.3.0 by Sebastian Bergmann and contributors.

Runtime:       PHP 7.4.8 with Xdebug 2.9.6
Configuration: /home/vagrant/projects/phpunit-phpdbg-coverage-bug/phpunit.xml

Demo (Zlodes\PhpUnitCoverageBugDemo\Tests\Demo)
 ✔ Demo foo returns true  21 ms

Time: 00:00.073, Memory: 8.00 MB

OK (1 test, 1 assertion)

Generating code coverage report in Clover XML format ... done [00:00.085]


Code Coverage Report:
  2020-08-07 12:19:11

 Summary:
  Classes: 100.00% (1/1)
  Methods: 100.00% (1/1)
  Lines:   100.00% (2/2)

Zlodes\PhpUnitCoverageBugDemo\Demo
  Methods: 100.00% ( 1/ 1)   Lines: 100.00% (  1/  1)
```
