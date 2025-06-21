<?php

namespace Fase22\Reports\Commands;

use Illuminate\Console\Command;

class ReportsCommand extends Command
{
    public $signature = 'reports';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
