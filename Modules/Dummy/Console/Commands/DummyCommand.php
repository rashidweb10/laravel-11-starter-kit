<?php

namespace Modules\Dummy\Console\Commands;

use Illuminate\Console\Command;

class DummyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:DummyCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dummy Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
