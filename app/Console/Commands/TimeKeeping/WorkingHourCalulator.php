<?php

namespace App\Console\Commands\TimeKeeping;

use Illuminate\Console\Command;

class WorkingHourCalulator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'WorkingHour:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Auto calculator Working Time each Day';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
    }
}
