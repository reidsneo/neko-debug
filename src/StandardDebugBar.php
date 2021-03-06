<?php
/*
 * This file is part of the DebugBar package.
 *
 * (c) 2013 Maxime Bouroumeau-Fuseau
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Neko\Debug;

use Neko\Debug\DataCollector\ExceptionsCollector;
use Neko\Debug\DataCollector\MemoryCollector;
use Neko\Debug\DataCollector\MessagesCollector;
use Neko\Debug\DataCollector\PhpInfoCollector;
use Neko\Debug\DataCollector\RequestDataCollector;
use Neko\Debug\DataCollector\TimeDataCollector;

/**
 * Debug bar subclass which adds all included collectors
 */
class StandardDebugBar extends DebugBar
{
    public function __construct()
    {
        $this->addCollector(new PhpInfoCollector());
        $this->addCollector(new MessagesCollector());
        $this->addCollector(new RequestDataCollector());
        $this->addCollector(new TimeDataCollector());
        $this->addCollector(new MemoryCollector());
        $this->addCollector(new ExceptionsCollector());
    }
}
