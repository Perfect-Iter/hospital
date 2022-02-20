<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class migrate_order extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate_in_order';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Execute the migrations in the order specified in the file app/Console/Comands/MigrateInOrder.php \n Drop all the table in db before execute the command.';

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
       /** Specify the names of the migrations files in the order you want to 
        * loaded
        * $migrations =[ 
        *               'xxxx_xx_xx_000000_create_nameTable_table.php',
        *    ];
        */
        $migrations = [ 
                        '2014_10_12_000000_create_users_table.php',
                        '2014_10_12_100000_create_password_resets_table.php',
                        '2019_08_19_000000_create_failed_jobs_table.php',
                        '2019_12_14_000001_create_personal_access_tokens_table.php',
                        '2022_02_07_074626_create_doctors_table.php',
                        '2022_02_07_075058_create_managers_table.php',
                        '2022_02_07_071235_create_patients_table.php',
                        '2022_02_07_074054_create_clinics_table.php',
                        '2022_02_07_074933_create_manager__clinics_table.php',
                        '2022_02_07_075715_create_doctor__availabilities_table.php',
                        '2022_02_07_070541_create_books_table.php',    
        ];

        foreach($migrations as $migration)
        {
           $basePath = 'database/migrations/';          
           $migrationName = trim($migration);
           $path = $basePath.$migrationName;
           $this->call('migrate:refresh', [
            '--path' => $path ,            
           ]);
        }
    }
}
