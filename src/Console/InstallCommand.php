<?php

namespace Brayun\Administration\Console;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        /**
         * vendor publish
         */
        $this->call('vendor:publish', ['--provider' => 'Brayun\Administration\UcenterServiceProvider']);
        $this->call('vendor:publish', ['--provider' => 'Laravel\Passport\PassportServiceProvider']);
        $this->call('vendor:publish', ['--provider' => 'Zizaco\Entrust\EntrustServiceProvider']);

        $this->call('migrate');
        $this->call('passport:install');
    }
}
