<?php

declare(strict_types=1);

namespace App;

use App\Observer\Observer;
use App\Strategy\Strategy;

require_once dirname(__DIR__) . '/vendor/autoload.php';


new Strategy();
new Observer();
