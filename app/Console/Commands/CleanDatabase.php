<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Message;

class CleanDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laracarte:clean-database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clean database';

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
        $this->info('cleaning database....');
        Message::twoMonthsOld()->delete();
        $this->info('database cleaned.');
    }

    protected function schedule(Schedule $schedule)
    {
        $schedule->command('laracarte:clean-database')->monthly();
    }
}
