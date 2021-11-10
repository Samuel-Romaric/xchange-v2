<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class haveDate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'xchange:date';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get now date of to day';

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
     * @return int
     */
    public function handle()
    {
        // Test of command
        $this->error("Morning...");
        $this->warn("Hola!");
        $user = User::all();
        printf("\tAbidjan le : %s \n", now());
        printf("\n%s\n", $user[1]["name"]);
        $this->info("Done ...!");
    }
}
