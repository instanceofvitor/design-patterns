<?php
/*
* This file is part of DesignPatterns.
*
* (c) Vitor Silva <vsilva@live.co.uk>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

require_once __DIR__ . '/vendor/autoload.php';

use DesignPatterns\Behavioral\Strategy\Client as StrategyClient;

$client = new StrategyClient();
$client->run();
