<?php

namespace Arrilot\SystemCheck\Checks\Laravel\Production;

use Arrilot\SystemCheck\Checks\Check;
use Arrilot\SystemCheck\Results\Result;

class OptimizedClassLoaderExists extends Check
{
    /**
     * The check description.
     *
     * @var string
     */
    protected $description = 'Optimized class loader';

    /**
     * Perform the check.
     *
     * @return Result
     */
    public function perform()
    {
        if (!file_exists($this->app->getCachedCompilePath())) {
            return $this->fail("Run 'php artisan optimize'");
        }

        return $this->ok();
    }
}