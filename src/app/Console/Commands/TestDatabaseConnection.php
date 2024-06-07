<?php

namespace App\Console\Commands;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use PDO;

class TestDatabaseConnection extends Command
{
    protected $signature = 'test:db-connection';
    protected $description = 'Test database connection';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        try {
            $result = DB::select('SELECT 1');
            $this->info('Connection successful: ' . json_encode($result));
        } catch (Exception $e) {
            $this->error('Connection failed: ' . $e->getMessage());
        }
    }
}
