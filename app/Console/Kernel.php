<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Carbon\Carbon;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function () {

            $appointment_records = Book::all();
            $now = Carbon::now();
            
            foreach ($appointment_records as $row) {

                if($row->dov > $now){
                    $row->status = "overdue";
                    $row->save();
                }
            }
        })->daily();


    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected $commands = [
        Commands\migrate_order::class,
    ];
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
        
        require base_path('routes/console.php');
    }
}
