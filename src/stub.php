#!/usr/bin/env php
<?php

Phar::mapPhar();
include 'phar://APPNAME.phar/index.php';
__HALT_COMPILER();