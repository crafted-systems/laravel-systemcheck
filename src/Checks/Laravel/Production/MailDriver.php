<?php

namespace Arrilot\SystemCheck\Checks\Laravel\Production;

use Arrilot\SystemCheck\CheckResult;
use Arrilot\SystemCheck\Checks\Check;

class MailDriver extends Check
{
    /**
     * The check description.
     *
     * @var string
     */
    protected $description = 'mail.driver';

    /**
     * Perform the check.
     *
     * @return CheckResult
     */
    public function perform()
    {
        if ($this->app['config']['mail.driver'] === 'array') {
            return $this->fail("Mail driver must not be set to 'log' in production");
        }

        return $this->ok();
    }
}
