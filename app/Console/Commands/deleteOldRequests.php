<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use DB;

class deleteOldRequests extends Command
{
    /**
+     * The name and signature of the console command.
+     *
+     * @var string
+     */
    protected $signature = 'deleteOldRequests:deleterequests';

   /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete requests past end date';

    /**
+     * Create a new command instance.
+     *
+     * @return void
+     */
    public function __construct()
    {
        parent::__construct();
    }

   /**
+     * Execute the console command.
+     *
+     * @return mixed
+     */
    public function handle()
    {
        $date=Date('y:m:d', strtotime("-1 days"));
        DB::table('requestHubs')->where('created_at','<=',$date)->delete();
    }
}