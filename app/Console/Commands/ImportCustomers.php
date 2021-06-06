<?php

namespace App\Console\Commands;

use App\Helpers\Importer;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class ImportCustomers extends Command
{
    protected $importer;

    /**
     * The name and signature of the console command.
     */
    protected $signature = 'import:customers';

    /**
     * The console command description.
     */
    protected $description = 'Use for importing Australian Customers to the Database';

    /**
     * Create a new command instance.
     */
    public function __construct(Importer $importer)
    {
        parent::__construct();
        $this->importer = $importer;
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Use the immporter here via Service Container shit
        Log::info($this->importer->fetch());
    }
}
