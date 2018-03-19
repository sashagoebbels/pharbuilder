# Phar Builder

## Introduction

Use this tool to bundle a PHP app as a phar file. This originally was built for a command line app so if you want to build a web archive, remove the $argc and $argv stuff from src/common.php.

## How to start

1. Set app name in create-phar.
1. Set app name for phar URL to index.php in src/stub.php.
1. Do the same with any phar URL in any file you create.

Just grep for "APPNAME" in all src files to find the placeholder.

## Syntax for phar URLs

The general syntax is:
```
phar://APPNAME.phar/FILENAME
```

FILENAME can be a PHP file to include or e.g. an ini filename to read from.
