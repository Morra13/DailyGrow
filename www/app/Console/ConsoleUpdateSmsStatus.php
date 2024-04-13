<?php

namespace App\Console;

use App\Http\Controllers\Api\SmsController;

class ConsoleUpdateSmsStatus
{
    /**
     * Sms status update
     *
     * @return void
     */
    public function __invoke()
    {
        (new SmsController())->updateSmsStatus();
    }
}
