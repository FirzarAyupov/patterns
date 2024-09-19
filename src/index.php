<?php

declare(strict_types=1);

namespace App;

require_once dirname(__DIR__).'/vendor/autoload.php';

use App\Strategy\Strategy;

$strategy = new Strategy();
$strategy->run();
