<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use  DB;
class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {

            // $data = DB::table('d_booking')
            //           ->whereRaw('db_total_remain = db_total')
            //           ->where('db_status','Waiting List')
            //           ->get();

            // for ($i=0; $i < count($data); $i++) { 
            //     $cari = DB::table('m_detail_intinerary')
            //               ->where('md_id',$data[$i]->db_intinerary_id)
            //               ->first();

            //     $update = DB::table('m_detail_intinerary')
            //               ->where('md_id',$data[$i]->db_intinerary_id)
            //               ->update([
            //                 'md_seat_remain' => $cari->md_seat_remain + $data[$i]->db_total_adult + $data[$i]->db_total_child
            //               ]);
            // }

            return 'tes';
        })->everyMinute();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
