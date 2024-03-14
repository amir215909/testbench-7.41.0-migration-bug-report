# Demo for testbench migration bug appeared in 7.41.0

# Testbench Migration Bug Reproduction Demo

This repository serves as a demo to reproduce the migration bug that appeared in a testbench 7.41.0.

## Problem Description

Migrations loaded with `loadMigrationsFrom` method of `InteractsWithMigrations` don't run.

## Environment:
* Testbench: 7.41.0
* Testbench-core: 7.42.0
* Laravel: 9.52.16
* PHP: 8.2.10
* Database Driver: sqlite

## How to Reproduce

`main` branch contains the bugged version and `testbench-7.40.0` branch contains without bug version

## Branches

### No Bug Version

This branch contains the code without the bug (testbench versions below 7.41.0).

[Branch without the bug](https://github.com/amir215909/testbench-7.41.0-migration-bug-report/tree/testbench-7.40.0)

### Bug Version

This branch contains the code with the bug (testbench version 7.41.0).

[Branch with the bug](https://github.com/amir215909/testbench-7.41.0-migration-bug-report)
