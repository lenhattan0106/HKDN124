<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class GenerateModels extends Command
{
    protected $signature = 'generate:models';
    protected $description = 'Generate Eloquent models for all database tables';

    public function handle()
    {
        $tables = DB::select('SHOW TABLES');
        $dbName = 'Tables_in_' . DB::getDatabaseName();

        foreach ($tables as $table) {
            $tableName = $table->$dbName;
            $modelName = Str::studly(Str::singular($tableName));

            $this->call('krlove:generate:model', [
                'class-name' => $modelName,
                '--table-name' => $tableName,
            ]);

            $this->info("Model {$modelName} created for table {$tableName}");
        }

        return 0;
    }
}
